<?php
	namespace classes;
	
	abstract class page{
		public $content;
		public $db;
		public function __construct($dbh){
			$this->get($dbh);
		}
		public function __destruct(){
			$this->heading();
			//$this->get();
			echo $this->content;
		}
		public function get($dbh){
			
		}
		public function post(){
			
		}
	}
?>