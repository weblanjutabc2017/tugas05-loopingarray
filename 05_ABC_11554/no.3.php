<?php
	$x=42000;
	echo "Jumlah pendapatan = $$x<br/>";

	if($x>=0 and $x <=32000){
		$y=$x*0.10;
	}else($x > 32000){
		$y=3200 +(($x-32000) * 0.25)
	};

	echo "Jika kamu single, maka ";
	echo "pajak yang harus kamu bayar adalah $" . $y . "<br/>";

	if($x>=0 and $x<=64000){
		$y=$x*0.10;
	}else($x>64000){
		$y=6400 +(($x-64000)*0.25)
	};

	echo "Jika kamu sudah menikah, maka ";
	echo "pajak yang harus kamu bayar adalah $". $y . "<br/>";
?>