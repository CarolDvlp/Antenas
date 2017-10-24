angular.module("HomeApp").controller("CreateAntennaController", ["$http", "$timeout", function($http, $timeout){
	var scope = this;

	scope.fillTheFieldsMessage = "";
	scope.showEmptyFieldsMessage = false;
	scope.successMessage = "";
	scope.showSuccessMessagge = false;
	scope.errorMessage = "";
	scope.showErrorMessagge = false;

	scope.sendAntennaForm = function(createAntennaForm){
		if(createAntennaForm.$valid){
			$http.post('http://localhost/antenas/index.php/antenna', scope.antenna).then(function(response){
				scope.successMessage = response.data.successMessage;
				scope.showSuccessMessagge = true;

				$timeout(function(){
					scope.showSuccessMessage = false;
				}, 3000);

				createAntennaForm.$pristine = true;
				scope.antenna = {};

			}, function(response){
				scope.errorMessage = "Ha ocurrido un error al intentar crear la antena.";
				scope.showErrorMessagge = true;
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