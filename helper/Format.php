<?php
	/**
	* Format Helper
	*/
	class Format
	{
		public function date($date){
			return date('F j,Y, g:i a', strtotime($date));
		}

		public function testShorten($text, $limit = 200){
			$text  = $text." ";
			$text  = substr($text, 0 , $limit);
			$text = $text.".........";
			return $text;

		}
	}



?>