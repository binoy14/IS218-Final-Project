<?php

	namespace classes;

	use \PDO;
	public $dbh;

	public function __construct(){
		try {
			$dbh = new PDO('mysql:host=localhost; dbname=college_data;charset=utf8', 'root', 'password');
		}catch(Exception $e) {
			print "Error: " . $e->getMessage() . "<br>";
			die();
		}
		return $dbh;
	}
	
?>