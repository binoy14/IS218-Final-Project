<?php
	namespace classes;

	use \classes\page as page;
	class question2 extends page{
		public function heading(){
			$this->content .= '
			<div class="container">
				<h2>Question 2<h2>
				<h5>Create a web page that that lists the colleges with the largest amount of total liabilities.</h5>';
		}
		public function get(){
			$sql = "select colleges.INSTNM from colleges join Fin_11 on Fin_11.UNITID = colleges.UNITID order by Fin_11.F1A13 desc";
			return $sql;
		}
	}
?>