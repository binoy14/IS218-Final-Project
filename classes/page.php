<?php
	namespace classes;
	
	abstract class page{
		public $content;
		public function __construct(){
			$this->heading();
		}
		public function __destruct(){
			echo $this->content;
		}
		public function get(){
			
		}
		public function post(){
			
		}
	}
?>