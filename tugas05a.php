<?php
//ini jawaban untuk no 1
$y = 0;
for($x = 1;$x <= 100; $x++){
	if($x%2 != 0 ){
		$y+=1;
	}
}
echo "$y ";

//ini jawaban no 2
for($b = 7 ; $b <= 100 ; $b+=7){
				echo $b . "<br>";
			}
	}
);


//ini jawaban no 3
$income = 10000;
$status = "Married";
$jum = 0;

if ($status == "Single"){
	if($income > 0 && $income < 32000){
		$jum = 0.10 * $income;
	}else if($income > 32000){
		$jum = 3200 + (($income - 3200)*0.25);
	}else{
		$jum = 0;
	}
}else{
	if ($income > 0 && $income <64000){
		$jum = 0.10 * $income;
	}else if($income > 64000){
	$jum = 6400 + (($income-6400)*0.25);
	}else{
		$jum = 0;
	}
}
echo "Tax with $".$income." of income and ".$status." = " . $jum;
?>