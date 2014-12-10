<?php
	namespace classes;
	use \classes\page as page;

	class question1 extends page{
		public function heading(){
			$this->content .= '
			<div class="container">
				<h2>Question 1<h2>
				<h5>Create a web page that shows the colleges that have the highest enrollment</h5>
			</div>';
		}
		public function get($dbh){
			/******* Changed Result Section for DEMO *******/
			//$sql = 'SELECT Colleges.INSTNM, EFYTOTLT FROM Enrollment, Colleges WHERE Enrollment.UNITID = Colleges.UNITID ORDER BY EFYTOTLT DESC LIMIT 25';
			$sql = "select colleges.INSTNM from colleges join enrol_11 on enrol_11.UNITID = colleges.UNITID WHERE EFFYLEV = '1' ORDER BY EFYTOTLT desc";

			//$sql = 'SELECT * from Fin_2010 LIMIT 25';
			$query = $dbh->prepare($sql); 
			$query->execute(); 
			$results = $query->fetchAll(\PDO::FETCH_ASSOC);


			$table = '<table class="table table-striped" border="1">';
			$table .= '<tr><th>' . "UNITID" . '</th></tr><tr>';
			$i = 0;
			foreach($results as $result){
				$table .= '<td>' . $result['INSTNM'] . '</td></tr>';
				$i++;
			}
			echo $table;

		}
	}
?>
