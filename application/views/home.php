<!DOCTYPE html>
<html ng-app="HomeApp">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/node_modules/bulma/css/bulma.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Home</title>
</head>
<body>
	<section class="section" ng-controller="HomeController as scope">
		<div class="container">
			<div class="columns">
	  			<div class="column is-2">
					<aside class="menu">
					  	<p class="menu-label">
					    	Antenas
					 	</p>
						<ul class="menu-list">
						    <li><a href="#/!" class="is-active">Mis antenas</a></li>
						    <li><a href="#!createantenna">Crear antena</a></li>
						</ul>
		     		    <p class="menu-label">
					    	Sector
					    </p>
					    <ul class="menu-list">
						    <li><a href="#!listsector">Sectores</a></li>
						    <li><a href="#!createsector">Crear sector</a></li>
					    </ul>
					</aside>	
				</div>
				<div class="column">
					<ng-view></ng-view>
				</div>
			</div>		
		</div>
	</section>


	
<script type="text/javascript" src="<?php echo base_url();?>assets/node_modules/angular/angular.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/node_modules/angular-route/angular-route.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/home/app.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/home/HomeController.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/home/antenna/controllers/AntennaController.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/home/antenna/controllers/CreateAntennaController.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/home/antenna/controllers/EditAntennaController.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/home/sector/controllers/CreateSectorController.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/home/sector/controllers/ListSectorController.js"></script>


</body>
</html>