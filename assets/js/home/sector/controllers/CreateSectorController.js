angular.module("HomeApp").controller("CreateSectorController", ["$http", function($http){
	var scope = this;
	scope.sector = "";
	scope.fillTheFieldsMessage = "";
	scope.showEmptyFieldsMessage = false;

	scope.doCreateSector = function(){
		if(scope.sector == ""){
			scope.showEmptyFieldsMessage = true;
			scope.fillTheFieldsMessage = "Debe ingresar el sector";
		}else{
			var dataObject = {
				sector: scope.sector
			}
			$http.post('http://localhost/antenas/index.php/createsector', dataObject).then(function(response){
				//exito
			}, function(response){
				//fracaso
			});
		}
	}


}]);
