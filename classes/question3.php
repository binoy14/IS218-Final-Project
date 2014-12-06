<?php
	namespace classes;

	use \classes\page as page;
	class question3 extends page{
		public function heading(){
			$this->content .= '
			<div class="container">
				<h2>Question 3<h2>
				<h5>Create a web page that lists the colleges with the largest amount of net assets.</h5>
			</div>';
		}
	}
?>