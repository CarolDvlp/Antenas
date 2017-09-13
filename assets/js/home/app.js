angular.module("HomeApp", ["ngRoute"]).config(["$routeProvider", function($routeProvider){

	$routeProvider.when("/antennas", {
		controller: "AntennaController",
		controllerAs: "vm",
		templateUrl: "assets/js/home/antenna/templates/antennas.html"
	})
	.when("/login",
	{
		controller: "/LoginController",
		controller as: "vm",
		templateUrl: "assets/js/login/templates/login.html"
	});

}]);