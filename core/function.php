<?php 



	
	function odd_number($item) {
		if($item % 2 == 0 ){

			// return "Odd Number";
			return true;
		}else{
			// return "Even Number";
			return false;
		}
	}

	function format_var_dump($item) {
		echo "<pre>";

		var_dump($item);

		echo "<pre>";
	}

	function redirect($location) 
	{
		return header("location:". $location);;
	}
