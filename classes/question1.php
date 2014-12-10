<?php
	namespace classes;
	use \classes\page as page;

	class question1 extends page{
		public function heading(){
			$this->content .= '
			<div class="container">
				<input id="q1" type="hidden" value="q1">
				<h2>Question 1<h2>
				<h5>Create a web page that shows the colleges that have the highest enrollment</h5>';
		}
		public function get($dbh){
			$sql = "select colleges.INSTNM from colleges join enrol_11 on enrol_11.UNITID = colleges.UNITID WHERE EFFYLEV = '1' ORDER BY EFYTOTLT desc";
			return $sql;
		}
	}
?>
