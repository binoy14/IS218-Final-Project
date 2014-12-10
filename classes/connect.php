<?php

	namespace classes;

	class connect{

		public function __construct(){
			
			try {
				$dbh = new \PDO('mysql:host=localhost; dbname=college', 'college', 'college');
				//echo 'connected';
			}catch(Exception $e) {
				print "Error: " . $e->getMessage() . "<br>";
				die();
			}
		}
	}
?>