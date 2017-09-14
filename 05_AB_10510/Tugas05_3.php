<? php
	$in = 67000;
	$stat = "Single";
	$total = 0;

		if ($stat == "Married"){
			if ($in > 0 && $in <64000){
			$total = 0.10 * $in ;
			} else if ($in > 64000){
			$total = 6400 + (($in - 6400)* 0.25);
			} else { $total = 0; }
		} else {
			if ($in > 0 && $in <32000){
			$total = 0.10 * $in ;
			} else if ($in > 32000){
			$total = 3200 + (($in - 3200)* 0.25);
			} else { $total = 0; }
		}
	echo "Total TAX dalam $ dari pendapatan " .$in. " dengan status " . $stat. " adalah " . $total;  

	
?>