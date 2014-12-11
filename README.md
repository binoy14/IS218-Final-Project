##IS218-Final-Project - College Data Project
===================


##Introduction

This program runs off of college data imported into a mysql database; using php and PDOs we connected to the database and ran the following five queries found on the separate pages above.


##Creating a connect file
````php
<?php
	try {
		$dbh = new PDO('mysql:host=localhost; dbname=databasename;charset=utf8', 'username', 'password');
	}catch(Exception $e) {
		print "Error: " . $e->getMessage() . "<br>";
		die();
	}	
?>
````

##CSS with Bootstrap
````
Install Bootrap with bower by running the following command
$ bower install bootstrap
````

<link rel="stylesheet" type="text/css" href="public/lib/bootstrap/dist/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="public/css/yourstyleshere.css">
<script type="text/javascript" src="public/lib/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="public/lib/bootstrap/dist/js/bootstrap.min.js"></script>

##Include autoloader

````php
<?php
function autoload($className)
{
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
    require $fileName;
}
?>

And initialize the autoloader on the index page by:
require 'Autoloader.php';
spl_autoload_register('autoload');
````

##Create a program or app file

````php
<?php
class program {
		public function __construct($dbh){
			$page_type = 'index';
			if(!empty($_GET)){
				$page_type = $_GET['page'];
				new $page_type($dbh);
			}
		}
	}
?>
This file creates an instance of page, which gets extended to the various questions. Based on the question the proper class gets created and data displayed.
````

##Setting the page type
````
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	<ul class="nav navbar-nav">
		<li><a href="index.php?page=classes\question1">Question 1</a></li>
		<li><a href="index.php?page=classes\question2">Question 2</a></li>
		<li><a href="index.php?page=classes\question3">Question 3</a></li>
		<li><a href="index.php?page=classes\question4">Question 4</a></li>
		<li><a href="index.php?page=classes\question5">Question 5</a></li>
	</ul>
</div>


This is how the pages get called. Based on the link that is pressed in the navigation, the page gets set to that question. 
````
