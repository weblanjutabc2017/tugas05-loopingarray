<?php
$y=0;

	for($x =1; $x<=100; $x++){
		if($x%7==0){
			echo $x. " ";
			$y++;
		}
	}

	echo "<br/>Banyaknya bilangan kelipatan 7 dari 1-100 yaitu " .$y;
?>