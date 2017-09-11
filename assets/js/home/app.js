angular.module("HomeApp", ["ngRoute"]).config(["$routeProvider", function($routeProvider){

	$routeProvider.when("/antennas", {
		controller: "AntennaController",
		controllerAs: "vm",
		templateUrl: "assets/js/home/antenna/templates/antennas.html"
	});

}]);