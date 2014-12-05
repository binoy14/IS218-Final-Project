<?php
	namespace classes;

	use \classes\page as page;
	class question1 extends page{
		public function heading(){
			$this->content .= '
			<div class="container">
				<h2>Question 1<h2>
			</div>';
		}
	}
