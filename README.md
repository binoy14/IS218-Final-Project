IS218-Final-Project
===================


## Connect File

<?php

	class connect{

		public function __construct(){
			try {
				$dbh = new PDO('mysql:host=host; dbname=database', 'user', 'password');
				//echo 'connected';
			}catch(Exception $e) {
				print "Error: " . $e->getMessage() . "<br>";
				die();
			}
		}
	}
?>