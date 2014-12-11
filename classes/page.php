<?php
	namespace classes;
	
	abstract class page{
		public $content;
		public $table;
		public function __construct($dbh){
			$sql = $this->get();
			$this->printTable($dbh,$sql);
		}
		public function __destruct(){
			$this->heading();
			echo $this->content;
			echo $this->table;
		}
		public function get(){}
		
		public function printTable($dbh, $sql){
			$query = $dbh->prepare($sql); 
			$query->execute(); 
			$results = $query->fetchAll(\PDO::FETCH_ASSOC);

			$this->table = '<table class="table table-responsive">';
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