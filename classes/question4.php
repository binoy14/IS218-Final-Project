<?php
	namespace classes;

	use \classes\page as page;
	class question4 extends page{
		public function heading(){
			$this->content .= '
			<div class="container">
				<h2>Question 4<h2>
				<h5>Create a web page that lists the colleges with the largest amount of net assets per student.</h5>';
		}
		public function get(){
			$sql = "SELECT colleges.INSTNM FROM colleges JOIN enrol_11 ON colleges.UNITID = enrol_11.UNITID JOIN Fin_11 ON colleges.UNITID = Fin_11.UNITID ORDER BY Fin_11.F1A18 / enrol_11.EFYTOTLT DESC";
			return $sql;
		}
	}
?>