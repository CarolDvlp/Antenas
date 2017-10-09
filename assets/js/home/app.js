angular.module("HomeApp", ["ngRoute"]).config(["$routeProvider", function($routeProvider){

	$routeProvider.when("/", {
		controller: "AntennaController",
		controllerAs: "vm",
		templateUrl: "../assets/js/home/antenna/templates/antennas.html"
	})
	.when("/createantenna", {
		controller: "CreateAntennaController",
		controllerAs: "scope",
		templateUrl: "../assets/js/home/antenna/templates/createantenna.html"
	})
	.when("/editantenna", {
		controller: "EditAntennaController",
		controllerAs: "scope",
		templateUrl: "../assets/js/home/antenna/templates/editantenna.html"
	})
	.when("/createsector", {
		controller: "CreateSectorController",
		controllerAs: "scope",
		templateUrl:"../assets/js/home/sector/templates/createsector.html"
	})
	.when("/listsector", {
		controller: "ListSectorController",
		controllerAs: "scope",
		templateUrl:"../assets/js/home/sector/templates/listsector.html"
	});
}]);