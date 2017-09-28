angular.module("HomeApp").controller("CreateAntennaController", ["$http", function($http){
	var scope = this;
	
	scope.nombre = "";
	scope.clave = "";
	scope.ssid = "";
	scope.marca = "";
	scope.modelo = "";
	scope.mac = "";
	scope.ganancia= "";
	scope.canal = "";
	scope.latitud = "";
	scope.longitud = "";

	scope.fillTheFieldsMessage = "";
	scope.showEmptyFieldsMessage = false;

	scope.doCreateAntena = function(){
		if(scope.nombre == "" || scope.clave == "" || scope.ssid == "" ||
		   scope.marca == "" || scope.modelo == "" || scope.mac == "" ||
		   scope.ganancia == "" || scope.canal == "" || scope.latitud == "" ||
		   scope.longitud == "")
		{
			scope.showEmptyFieldsMessage = true;
			scope.fillTheFieldsMessage = "Debe llenar todos los campos";
		}else{
			var dataObject = {
				nombre: scope.nombre,
				clave: scope.clave,
				ssid: scope.ssid,
				marca: scope.marca,
				modelo: scope.modelo,
				mac: scope.mac,
				ganancia: scope.ganancia,
				canal: scope.canal,
				latitud: scope.latitud,
				longitud: scope.longitud
			};

			$http.post('http://localhost/antenas/index.php/createantena', dataObject).then(function(response){
				//exito
			}, function(response){
				//fracaso
			});
		}

			
	};	

}]);