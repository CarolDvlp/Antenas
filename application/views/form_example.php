<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/node_modules/bulma/css/bulma.css">
	<title>Form Exmaple</title>
</head>
<body ng-app="app">
	<section class="hero is-primary">
		<div class="hero-body">
		    <div class="container">
				<h1 class="title">
			        Form Example
			    </h1>
			    <h2 class="subtitle">
			        Create user
			    </h2>
			</div>
		</div>
	</section>

			<br>
			<br>

	<section class="section" ng-controller="FormController as scope">
		<div class="container">	    
		    <div class="columns">
			   	<div class="column is-6 is-offset-3">

				   	<form name="createUserForm" ng-submit="scope.sendForm(createUserForm)" novalidate>
						<div class="field">
				         	<p class="control has-icons-left has-icons-right">
				         		<input
				         			name="name"
				         			ng-model="scope.user.name"
				         			ng-required="true"
				         			class="input" 
				         			type="text" 
				         			placeholder="Nombre">

				          		<span class="icon is-small is-left">
				            		<i class="fa fa-user"></i>
				          		</span>
				          	</p>
				      	</div>
				      	<p class="help" ng-show="createUserForm.name.$error.required && createUserForm.name.$touched">
				      		You have to complete this field
				      	</p>

				      	<div class="field">
				      		<p class="control has-icons-left">
				        		<input 
				        			name="lastName"
				         			ng-model="scope.user.lastName"
				         			ng-required="true"
				        			class="input" 
				        			type="text" 
				        			placeholder="Apellido">

				          		<span class="icon is-small is-left">
				            		<i class="fa fa-user"></i>
				            	</span>
				        	</p>
				      	</div>
				      	<p class="help" ng-show="createUserForm.lastName.$error.required && createUserForm.lastName.$touched">
				      		You have to complete this field
				      	</p>

				      	<div class="field">
				      		<p class="control has-icons-left">
				        		<input 
				        			name="age"
				         			ng-model="scope.user.age"
				         			ng-required="true"
				         			ng-pattern="/^[0-9]*$/"
				        			class="input" 
				        			type="text" 
				        			placeholder="Edad">

				          		<span class="icon is-small is-left">
				            		<i class="fa fa-user"></i>
				            	</span>
				        	</p>
				      	</div>
				      	<p class="help" ng-show="createUserForm.age.$error.required && createUserForm.age.$touched">
				      		You have to complete this field
				      	</p>
				      	<p class="help" ng-show="createUserForm.age.$error.pattern && createUserForm.age.$touched">
				      		Only numbers
				      	</p>

				      	<div class="field">
				      		<p class="control">
				        		<button class="button is-primary" ng-disabled="createUserForm.$invalid">
				              	Create
				           		</button>
				        	</p>
				      	</div>
				   	</form>

			    </div>      
	        </div>

		</div>	
	</section>

<script type="text/javascript" src="<?php echo base_url();?>assets/node_modules/angular/angular.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/node_modules/angular-route/angular-route.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/form_example/app.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/form_example/controllers/FormController.js"></script>

</body>
</html>