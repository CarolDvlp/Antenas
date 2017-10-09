angular.module("HomeApp").controller("ListSectorController", ["$http", function($http){

	var scope = this;
	scope.sectors = [];


	scope.doListSectors = function(){
			$http.get('http://localhost/antenas/index.php/sector').then(function(response){
				scope.sectors = response.data;
			}, function(response){
				
			});	
	}

	scope.doListSectors();

}]);
