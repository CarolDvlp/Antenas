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


	scope.doDeleteSector = function(sector){
		$http.delete('http://localhost/antenas/index.php/sector', {params: {sectorId: sector.sectorId}}).then(function(response){
			//Success callback
			alert(response.data.successMessage);
			scope.sectors.splice(scope.sectors.indexOf(sector), 1);

		}, function(response){
			//Error callback
			alert(response.data.errorMessage);
			
		});	
	}


}]);
