angular.module("HomeApp").controller("AntennaController", ["$http", function($http){

	var scope = this;
	scope.antennas = [];


	scope.doListAntennas = function(){
			$http.get('http://localhost/antenas/index.php/antenna').then(function(response){
				scope.antennas = response.data;
			}, function(response){
				
			});	
	}

	scope.doListAntennas();


}]);
