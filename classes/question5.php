<?php
	namespace classes;

	use \classes\page as page;
	class question5 extends page{
		public function heading(){
			$this->content .= '
			<div class="container">
				<h2>Question 5<h2>
				<h5>Create a web page that shows the colleges with the largest percentage increase in enrollment between the years of 2010 and 2011.</h5>
			</div>';
		}
	}
?>