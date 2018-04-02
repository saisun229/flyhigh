<?php 
	
	function validateDate($date){
		//function to validate user entered date. if user entered date is past todays date it returns flase else returns true.
		$todayDate = date('Y-m-d');
		$userDate = date($date);
		$diff = $userDate < $todayDate;
		if($diff){
			return false;
		}
		else{
			return true;
		}//end if/else 
	}//end validateDate function
	
	function compareDates($date1, $date2){
		//compares depature date and return date and returns flase if depature date is greater return date, else returns true.
		$departDate = date($date1);
		$returnDate = date($date2);
		if($returnDate >= $departDate){
			return true;
		}
		else{
			return false;
		}//end if/else
	}//end function compareDates
	
	function validateAlphanumeric($string){ 
		if (!empty($string) && !ctype_space($string) and ctype_alnum($string)){
			//ctype_alpha checks only for alphanumeric other characters return false
			return true; 
		} 
		else{ 
			return false; 
		}//end if/else
	}//end function validateAlphanumeric 
?>