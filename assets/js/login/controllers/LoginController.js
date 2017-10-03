angular.module("LoginApp").controller("LoginController", ["$http", function($http){
	var scope = this;
	scope.loginDataUsername = "";
	scope.loginDataPass = "";
	scope.errorMessage = "";
	scope.fillTheFieldsMessage = "";
	scope.showErrorMessage = false;
	scope.showEmptyFieldsMessage = false;
	scope.sendedData = false;

	scope.doLogin = function(){
		if (scope.loginDataUsername == "" || scope.loginDataPass == ""){
			scope.showEmptyFieldsMessage = true;
			scope.fillTheFieldsMessage = "Debe llenar los campos requeridos";
		}
		else{
			scope.sendedData = true;
			scope.showEmptyFieldsMessage = false;
			var dataObject = {
				username: scope.loginDataUsername,
				pass: scope.loginDataPass
			};
			
			$http.post('http://localhost/antenas/index.php/login', dataObject).then(function(response){
				//Obtengo la url del home para redireccionar. Esto siempre y cuando las creadenciales sean correactas.
				window.location.href = response.data.url;
			}, function(response){
				//Muestro el mensaje de error.
				scope.errorMessage = response.data.message;
				scope.showErrorMessage = true;
				scope.loginDataUsername = "";
				scope.loginDataPass = "";
				scope.sendedData = false;
			});
		}
	};	

	

}]);

