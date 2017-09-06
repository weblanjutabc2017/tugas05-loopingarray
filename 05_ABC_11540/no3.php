<?php
 	$a=100000;
 	echo "Jumlah penghasilan = $a<br/>";
 
 	if($a>=0 and $a <=32000){
 		$b=$a*0.10;
 	}else($a > 32000){
 		$b=3200 +(($a-32000) * 0.25)
 	};
 
 	echo "Jika kamu single, maka ";
 	echo "pajak yang harus kamu bayar adalah $" . $b . "<br/>";

 	if($a>=0 and $a<=64000){
 		$b=$a*0.10;
	}else($a>64000){
 		$b=6400 +(($a-64000)*0.25)
 	};
 
 	echo "Jika kamu sudah menikah, maka ";
 	echo "pajak yang harus kamu bayar adalah $". $b . "<br/>";
 ?> 