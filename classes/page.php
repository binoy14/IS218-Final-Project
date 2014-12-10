<?php
	namespace classes;
	
	abstract class page{
		public $content;
		public $table;
		public function __construct($dbh){
			$this->get($dbh);
		}
		public function __destruct(){
			$this->heading();
			echo $this->content;
			echo $this->table;
		}
		public function get($dbh){
			
		}
		public function post(){
			
		}
	}
?>