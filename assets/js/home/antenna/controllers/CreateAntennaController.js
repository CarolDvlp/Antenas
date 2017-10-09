angular.module("HomeApp").controller("CreateAntennaController", ["$http", function($http){
	var scope = this;

	scope.fillTheFieldsMessage = "";
	scope.showEmptyFieldsMessage = false;

	scope.sendAntennaForm = function(createAntennaForm){
		if(createAntennaForm.$valid){
			console.log(scope.antenna);
			$http.post('http://localhost/antenas/index.php/antenna', scope.antenna).then(function(response){
				//exito
			}, function(response){
				//error
			});

		}
	};


}]);