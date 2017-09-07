//Nama: Daniel Siddiq
//NIM : 16/396270/SV/10483
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

	echo "<center><h1>Hasil penjumlahan bilangan ganjil dari 1-100 Yaitu $sum</h1></center><br>";
	echo "<center><h1>Jmlh bilangan ganjil dari 1-100 Yaitu $n</h1></center>";
?>
