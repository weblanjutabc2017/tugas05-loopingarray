<?php
	$jumlah=0;
	$sum=0;
	for($a=1; $a<=100; $a++){
		if($a%2!=0){
			
			echo $a. " ";
			$jumlah++;
			
		}
		
	}
	
	for($b=1; $b<=100; $b++){
		if ($b%2!=0){
	$sum=$sum+$b;
		}
	}
	echo "<br />";
	echo "Banyaknya angka ganjil antara 1 sampai 100 yaitu " .$jumlah;
	
	echo "<br />";
	
	echo "Hasil penjumlahan bilangan ganjil antara 1 sampai 100 yaitu " .$sum;
	

?>

