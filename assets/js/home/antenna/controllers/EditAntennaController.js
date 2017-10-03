angular.module("HomeApp").controller("EditAntennaController", [function(){
	var scope = this;
	scope.text = "Probando";

	scope.fillTheFieldsMessage = "";
	scope.showEmptyFieldsMessage = false;

	scope.doCreateAntena = function(){
		if(scope.nombre == "" || scope.clave == "" || scope.ssid == "" ||
		   scope.marca == "" || scope.modelo == "" || scope.mac == "" ||
		   scope.ganancia == "" || scope.canal == "" || scope.latitud == "" ||
		   scope.longitud == "")
		{
			scope.showEmptyFieldsMessage = true;
			scope.fillTheFieldsMessage = "";
		}
	}

}]);