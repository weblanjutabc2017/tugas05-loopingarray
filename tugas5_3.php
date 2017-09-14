<?php
	$pendapatan = 20000;
	$status = "Nikah";
	$x = 0;
	
	if ($status == "Belum Menikah "){
		if ($pendapatan > 0 && $pendapatan < 32000){
			$x = 0.10 * $pendapatan;
		}
		else if ($pendapatan > 32000){
			$x = 3200 + (($x - 32000) * 0.25);
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
	
	echo "Pajak pendapatan " . $pendapatan . " dengan status " . $status . " = " . $x;
?> 