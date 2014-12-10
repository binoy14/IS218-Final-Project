<?php
	namespace classes;

	use \classes\page as page;
	class question3 extends page{
		public function heading(){
			$this->content .= '
			<div class="container">
				<h2>Question 3<h2>
				<h5>Create a web page that lists the colleges with the largest amount of net assets.</h5>';
		}
		public function get($dbh){
			$sql = "select colleges.INSTNM from colleges join Fin_11 on Fin_11.UNITID = colleges.UNITID order by Fin_11.F1A18 desc";
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