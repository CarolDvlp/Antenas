angular.module("HomeApp").controller("AntennaController", ["$http", function($http){

	var scope = this;
	scope.antennas = [];
	scope.showModal = false;

	//Declaro una variable que obtendrá el valor del "current Antenna object"
	scope.toDeleteAntenna = {};

	scope.doListAntennas = function(){
			$http.get('http://localhost/antenas/index.php/antenna').then(function(response){
				scope.antennas = response.data;
			}, function(response){
				
			});	
	}

	scope.doListAntennas();

	scope.checkIfYouReallyWantToDelete = function(currentAntennaObject){
		scope.showModal = true;
		scope.toDeleteAntenna = currentAntennaObject;
	};

	scope.doDeleteAntenna = function(){
		$http.delete('http://localhost/antenas/index.php/antenna', {params: {antennaId: scope.toDeleteAntenna.antennaId}}).then(function(response){
			alert(response.data.successMessage);
			scope.antennas.splice(scope.antennas.indexOf(scope.toDeleteAntenna), 1);
		}, function(response){

		});
		scope.showModal = false;
	};

}]);
