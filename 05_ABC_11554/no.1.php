<?php
$y=0;

	for($x =1; $x<=100; $x++){
		if($x%2!=0){
			echo $x. " ";
			$y++;
		}
	}

	echo "<br/>Banyaknya angka ganjil dari 1-100 yaitu " .$y;
?>