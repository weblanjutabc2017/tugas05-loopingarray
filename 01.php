<?php
	$sum=0;
	$n=0;

	for ($i=1; $i <= 100; $i++) { 
		if($i%2!=0){
			$sum=$sum+$i;
		}
	}

	for($j=1; $j <= 100; $j++){
		if($j%2!=0){
			$n++;
		}
	}

	echo "<center><h1>Hasil penjumlahan bilangan ganjil dari 1-100 adalah $sum</h1></center><br>";
	echo "<center><h1>Jumlah bilangan ganjil dari 1-100 adalah $n</h1></center>";
?>