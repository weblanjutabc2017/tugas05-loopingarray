<?php
	$jum=0;
	$n=0;

	for ($i=1; $i <= 100; $i++) { 
		if($i%2!=0){
			$jum+=$i;
		}
	}

	for($j=1; $j <= 100; $j++){
		if($j%2!=0){
			$n++;
		}
	}

	echo "Hasil penjumlahan bilangan ganjil dari 1-100 adalah : $jum <br>";
	echo "Jumlah bilangan ganjil dari 1-100 adalah : $n";
?>