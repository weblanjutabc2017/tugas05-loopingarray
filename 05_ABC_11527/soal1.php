<?php
	//menghitung banyak bil.ganjil dari 1-100
	$x = 1;
	$count = 0;
	
	for($x=1;$x<=100;$x++){
		if($x%2==1){
		$count++;
		}
	}
	
	echo $count;
?>
