<?php
	namespace classes;

	use \classes\page as page;
	class question2 extends page{
		public function heading(){
			$this->content .= '
			<div class="container">
				<h2>Question 2<h2>
				<h5>Create a web page that that lists the colleges with the largest amount of total liabilities.</h5>
			</div>';
		}
	}
?>