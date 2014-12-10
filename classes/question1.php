<?php
	namespace classes;
	use \classes\page as page;

	class question1 extends page{
		public function heading(){
			$this->content .= '
			<div class="container">
				<h2>Question 1<h2>
				<h5>Create a web page that shows the colleges that have the highest enrollment</h5>';
		}
		public function get($dbh){
			$sql = "select colleges.INSTNM from colleges join enrol_11 on enrol_11.UNITID = colleges.UNITID WHERE EFFYLEV = '1' ORDER BY EFYTOTLT desc";
			$query = $dbh->prepare($sql); 
			$query->execute(); 
			$results = $query->fetchAll(\PDO::FETCH_ASSOC);

			$this->table = '<table class="table table-bordered table-striped table-responsive">';
			$this->table .= '<tr><th>' . "Institue Name" . '</th></tr>';
			$i = 0;
			foreach($results as $result){
				$this->table .= '<td>' . $result['INSTNM'] . '</td></tr>';
				$i++;
			}
			$this->table .= '</table></div>';
		}
	}
?>
