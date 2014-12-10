<?php
	namespace classes;

	use \classes\page as page;
	class question5 extends page{
		public function heading(){
			$this->content .= '
			<div class="container">
				<h2>Question 5<h2>
				<h5>Create a web page that shows the colleges with the largest percentage increase in enrollment between the years of 2010 and 2011.</h5>';
		}
		public function get($dbh){
			$sql = "SELECT colleges.INSTNM FROM colleges JOIN enrol_10 ON colleges.UNITID = enrol_10.UNITID JOIN enrol_11 ON colleges.UNITID = enrol_11.UNITID ORDER BY ( enrol_10.EFYTOTLT / enrol_11.EFYTOTLT) * 100 DESC ";
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