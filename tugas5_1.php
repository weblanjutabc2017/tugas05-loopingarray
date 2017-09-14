<?php
	$n= 0;
	for ($x = 1; $x <= 100; $x++){
		if($x % 2==1){
			$n=$n+1;
		}
	}
	
	echo "Banyaknya Bilangan Ganjil dari 1 sampai 100 adalah " . $n ;
?>