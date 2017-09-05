<?php
	$p = 42000;
	
	echo "Pendapatan = " .$p. "<br/ >";
	
	if($p>=0 && $p<=32000){
		$x = $p*0.10;
	}else{
		$x = 3200 + ($p-32000)*0.25;
	}
	
	echo "Jika anda berstatus Single, maka anda terkena pajak sebesar " .$x. "<br/ >";
	
	if($p>=0 && $p<=64000){
		$y = $p*0.10;
	}else{
		$y = 6400 + ($p-64000)*0.25;
	}
	
	echo "Jika anda sudah menikah, maka anda akan terkena pajak sebesar " .$y. "<br />";
?>