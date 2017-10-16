angular.module("HomeApp").controller("CreateAntennaController", ["$http", function($http){
	var scope = this;

	scope.fillTheFieldsMessage = "";
	scope.showEmptyFieldsMessage = false;
	scope.successMessage = "";
	scope.showSuccessMessagge = false;
	scope.errorMessage = "";
	scope.showErrorMessage = false;

	scope.sendAntennaForm = function(createAntennaForm){
		if(createAntennaForm.$valid){
			$http.post('http://localhost/antenas/index.php/antenna', scope.antenna).then(function(response){
				scope.successMessage = response.data.successMessage;
				scope.showSuccessMessagge = true;
			}, function(response){
				scope.errorMessage = response.data.errorMessage;
				scope.showErrorMessage = true;
			});

		}
	};

	scope.sectors = [];

	scope.doListSectors = function(){
			$http.get('http://localhost/antenas/index.php/sector').then(function(response){
				scope.sectors = response.data;
			}, function(response){
				
			});	
	}


	scope.doListSectors();
}]);