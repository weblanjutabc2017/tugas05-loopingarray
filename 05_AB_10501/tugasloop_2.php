<?php
	
	$tmp = 0;
	for ($i=1;$i<100;$i++){
		if ($i%7 == 0){
			$tmp++;
		}
	}
	
	echo "Jumlah angka kelipatan 7 yang kurang dari 100 :".$tmp;
?>