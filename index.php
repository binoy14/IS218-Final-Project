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
			<ul class="nav navbar-nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="index.php?page=classes\question1">Question 1</a></li>
				<li><a href="index.php?page=classes\question2">Question 2</a></li>
				<li><a href="index.php?page=classes\question3">Question 3</a></li>
				<li><a href="index.php?page=classes\question4">Question 4</a></li>
				<li><a href="index.php?page=classes\question5">Question 5</a></li>
			</ul>
		</nav>
		<?php
			require 'Autoloader.php';
			spl_autoload_register('autoload');
			new classes\program;
		?>
		<div id="footer">
			<div class="container">
				<p class="muted-text">College Data Program by Giuseppe & Binoy</p>
			</div>
		</div>
	</body>
</html>