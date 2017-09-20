angular.module("LoginApp").controller("LoginController", ["$http", function($http){
	var scope = this;
	scope.loginDataUsername = "";
	scope.loginDataPass = "";
	scope.errorMessage = "";

	scope.doLogin = function(){
		if (scope.loginDataUsername == "" || scope.loginDataPass == ""){
			alert("Debe llenar los campos requeridos");
		}
		else{

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
			});
		}
	};
	

	

}]);

