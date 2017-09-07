<?php
	$biaya = array(
		array(30000, "Single"),
		array(50000, "Married"),
		array(43000, "Single"),
		array(78000, "Married")
	);
	$n_biaya = count($biaya);

	for($i=0; $i<$n_biaya; $i++){
		echo "Nominal = ".$biaya[$i][0]." Status = ".$biaya[$i][1]."<br>";
		if($biaya[$i][1]=="Single"){
			if($biaya[$i][0]>0 && $biaya[$i][0]<=32000){
				$tax[$i]=$biaya[$i][0]*0.1;
			}
			else if($biaya[$i][0]>32000){
				$tax[$i]=($biaya[$i][0]-32000)*0.25;
			}
		}
		else if($biaya[$i][1]=="Married"){
			if($biaya[$i][0]>0 && $biaya[$i][0]<=64000){
				$tax[$i]=$biaya[$i][0]*0.1;
			}
			else if($biaya[$i][0]>64000){
				$tax[$i]=($biaya[$i][0]-64000)*0.25;
			}
		}
		echo "Mempunyai pajak sejumlah = <b>".$tax[$i]."</b>"."<br><br>";
	}

?>
