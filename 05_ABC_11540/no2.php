<?php
	$a=0;
	for($b=1; $b<=100; $b++){
		if($b%7==0){
			echo $b." ";
			$a++;
		}

	}
	echo "<br />";
	echo "Banyaknya bilangan kelipatan 7 dari 1 sampai 100 adalah " .$a;

	

?>