<?php
	$pendapatan = 10000;
	$status = "Menikah";
	$x = 0;
	
	if ($status == "Lajang"){
		if ($pendapatan > 0 && $pendapatan < 32000){
			$x = 0.10 * $pendapatan;
		}
		else if ($pendapatan > 32000){
			$x = 3200 + (($pendapatan - 32000) * 0.25);
		}
		else {
			$x = 0;
		}
	}
	else {
		if ($pendapatan > 0 && $pendapatan < 64000){
			$x = 0.10 * $pendapatan;
		}
		else if ($pendapatan > 64000){
			$x = 6400 + (($pendapatan - 64000) * 0.25);
		}
		else {
			$x = 0;
		}
	}
	
	echo "Pajak dari pendapatan sebanyak $".$pendapatan." dengan status ".$status." adalah sebanyak = $".$x;
?> 