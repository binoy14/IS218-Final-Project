<?php
	namespace classes;
	use \classes\page as page;

	class question1 extends page{
		public function __construct(){
			
		}
		public function heading(){
			$this->content .= '
			<div class="container">
				<h2>Question 1<h2>
				<h5>Create a web page that shows the colleges that have the highest enrollment</h5>
			</div>';
		}
		public function get(){
			//$sql = 'SELECT Colleges.INSTNM, EFYTOTLT FROM Enrollment, Colleges WHERE Enrollment.UNITID = Colleges.UNITID ORDER BY EFYTOTLT DESC LIMIT 25';
			$sql = 'SELECT * from colleges LIMIT 25';
			$query = $dbh->prepare($sql); 
			$query->execute(); 
			$results = $query->fetchAll(\PDO::FETCH_ASSOC);


			$table = '<table class="table table-striped" border="1">';
			$table .= '<tr><th>' . "UNITID" . '</th>' . '<th>' . "INSTNM" . '</th></tr><tr>';
			$i = 0;
			foreach($results as $result){
				$table .= '<td>' . $result['UNITID'] . '</td>' . '<td>' . $result['INSTNM'] . '</td></tr>';
				$i++;
			}
			echo $table;

		}
	}
?>
