<?php
	$status = "Single";
	$income = 30000;
	$tax = 0;
	
	if($status = "Single"){
		if($income<=32000){
			$tax=0.1*$income;
		}
		else{
			$tax=3200+0.25*($income-32000);
		}
	}
	elseif($status = "Married"){
		if($income<=64000){
			$tax=0.1*$income;
		}
		else{
			$tax=6400+0.25*($income-64000);
		}
	}
	
	echo $tax;
?>
