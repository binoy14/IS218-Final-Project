<?php
	namespace classes;
	use \classes\page as page;

	include('connect.php');
	class question1 extends page{
		public function heading(){
			$this->content .= '
			<div class="container">
				<h2>Question 1<h2>
				<h5>Create a web page that shows the colleges that have the highest enrollment</h5>
			</div>';
		}
		public function get(){
			$sql = 'SELECT Colleges.INSTNM, EFYTOTLT FROM Enrollment, Colleges WHERE Enrollment.UNITID = Colleges.UNITID ORDER BY EFYTOTLT DESC LIMIT 25';
			
			$query = $dbh->prepare($sql, array(PDO::ATR_CURSOR => PDO::CURSOR_FWDONLY)); 
			$query->execute(); 
			$results = $query->fetchAll();

			echo $results;
		}
	}
?>
