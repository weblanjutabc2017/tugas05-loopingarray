<?php
	//menghitung banyak bil. kelipatan 7 yg kurang dari 100
	$x = 1;
	$count = 0;
	
	for($x=1;$x<=100;$x++){
		if($x%7==0){
		$count++;
		}
	}
	
	echo $count;
?>
