<?php
	$income = 10000;
	$status = "Married";
	$tmp = 0;
	
	if ($status == "Single"){
		if ($income > 0 && $income < 32000){
			$tmp = 0.10 * $income;
		}
		else if ($income > 32000){
			$tmp = 3200 + (($income - 32000) * 0.25);
		}
		else {
			$tmp = 0;
		}
	}
	else {
		if ($income > 0 && $income < 64000){
			$tmp = 0.10 * $income;
		}
		else if ($income > 64000){
			$tmp = 6400 + (($income - 64000) * 0.25);
		}
		else {
			$tmp = 0;
		}
	}
	
	echo "Tax with $".$income." of income and ".$status." = ".$tmp;
?>