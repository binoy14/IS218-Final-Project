<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="public/lib/bootstrap/dist/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="public/css/style.css">
		<script type="text/javascript" src="public/lib/jquery/dist/jquery.min.js"></script>
		<script type="text/javascript" src="public/lib/bootstrap/dist/js/bootstrap.min.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-default" role="navigation">
			<div class="navbar-header">
		    	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
		        </button>
		      <a class="navbar-brand" href="index.php">IS218 Final</a>
		    </div>
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="index.php?page=classes\question1">Question 1</a></li>
					<li><a href="index.php?page=classes\question2">Question 2</a></li>
					<li><a href="index.php?page=classes\question3">Question 3</a></li>
					<li><a href="index.php?page=classes\question4">Question 4</a></li>
					<li><a href="index.php?page=classes\question5">Question 5</a></li>
				</ul>
			</div>
		</nav>
		<?php
			error_reporting(E_ALL);
			ini_set('display_errors', 1);
			require 'connect.php';
			require 'Autoloader.php';
			spl_autoload_register('autoload');
			new classes\program($dbh);
		?>
		<?php if(empty($_GET)) { ?>
		<div class="jumbotron">
		  <h1>College Data Program</h1>
		  <p>
		  		This program runs off of college data imported into a mysql database; 
		  		using php and PDOs we connected to the database and ran the following
		  		five queries found on the separate pages above.
		  </p>
		</div>
		<?php } ?>
		<footer class="footer">
			<div class="container">
				<p class="muted-text">College Data Program by Giuseppe & Binoy</p>
			</div>
		</footer>
	</body>
</html>