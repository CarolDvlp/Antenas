<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/node_modules/bulma/css/bulma.css">
</head>
<body ng-app="HomeApp">

	<div ng-controller="HomeController as scope">
		{{scope.name}}
	</div>

	<ng-view></ng-view>

	<script type="text/javascript" src="<?php echo base_url();?>assets/node_modules/angular/angular.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/node_modules/angular-route/angular-route.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/home/app.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/home/HomeController.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/home/antenna/controllers/AntennaController.js"></script>
</body>
</html>