<!DOCTYPE html>
<html ng-app='LoginApp'>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/node_modules/bulma/css/bulma.css">
	<title>Login</title>
</head>
<body>
	<section class="hero is-primary">
		<div class="hero-body">
		    <div class="container">
				<h1 class="title">
			        Antennas
			    </h1>
			    <h2 class="subtitle">
			        Gestión de antenas y enlaces
			    </h2>
			</div>
		</div>
	</section>

			<br>
			<br>

	<section class="section">
		<div class="container" ng-controller='LoginController as scope'>
	    <!--FORMULARIO LOGIN-->
		    <div class="columns">
			   	<div class="column is-6 is-offset-3">
			  	<!--MENSAJE CREDENCIALES INCORRECTAS -->
					<div class="notification is-danger" ng-show="scope.showErrorMessage">
					 	<center><p>{{scope.errorMessage}}</p></center>
					 </div>
				<!--FIN MENSAJE CREDENCIALES INCORRECTAS -->
				<!--MENSAJE CASILLAS VACÍAS -->
					<div class="notification is-warning" ng-show="scope.showEmptyFieldsMessage">
					 	<center><p>{{scope.fillTheFieldsMessage}}</p></center>
					 </div>
				<!--FIN MENSAJE CASILLAS VACIAS -->
			    	<div class="field">
			         	<p class="control has-icons-left has-icons-right">
			         		<input class="input" type="text" placeholder="Usuario" ng-model="scope.loginDataUsername">
			          		<span class="icon is-small is-left">
			            		<i class="fa fa-user"></i>
			          		</span>
			          	</p>
			      	</div>
			      	<div class="field">
			      		<p class="control has-icons-left">
			        		<input class="input" type="password" placeholder="Clave" ng-model="scope.loginDataPass">
			          		<span class="icon is-small is-left">
			            		<i class="fa fa-lock"></i>
			            	</span>
			        	</p>
			      	</div>
			      	<div class="field">
			      		<p class="control">
			        		<button ng-class="scope.sendedData ? 'is-loading' : ''" class="button is-primary" ng-click="scope.doLogin()">
			              	Iniciar sesión
			           		</button>
			        	</p>
			      	</div>    
			    </div>      
	        </div>
			<!--FORMULARIO LOGIN-->
		</div>	
	</section>

<script type="text/javascript" src="<?php echo base_url();?>assets/node_modules/angular/angular.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/node_modules/angular-route/angular-route.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/login/LoginApp.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/login/controllers/LoginController.js"></script>

</body>
</html>