angular.module("HomeApp").controller("CreateSectorController", ["$http", function($http){
	var scope = this;
	scope.sector = "";
	scope.fillTheFieldsMessage = "";
	scope.showEmptyFieldsMessage = false;
	scope.errorMessage = "";
	scope.showErrorMessage = false;
	scope.successMessage = "";
	scope.showSuccessMessage = false;

	scope.doCreateSector = function(){
		if(scope.sector == null){
			scope.showEmptyFieldsMessage = true;
			scope.fillTheFieldsMessage = "Debe ingresar el sector";
			scope.showEmptyFieldsMessage = false;
		}else{
			var dataObject = {
				sector: scope.sector
			}
			$http.post('http://localhost/antenas/index.php/sector', dataObject).then(function(response){
				scope.successMessage = response.data.successMessage;
				scope.showSuccessMessage = true;
				scope.sector = "";
			}, function(response){
				scope.errorMessage = response.data.errorMessage;
				scope.showErrorMessage = true;

			});
		}
	}


}]);
