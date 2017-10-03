angular.module("app").controller("FormController", [function(){

	var scope = this;

	scope.sendForm = function(createUserForm){
		if(createUserForm.$valid){
			console.log(scope.user);
		}
	};

}]);