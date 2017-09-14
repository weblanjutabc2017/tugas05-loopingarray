<?php
	$gaji = array(
		array(20000, "Single"),
		array(46000, "Single"),
		array(69000, "Single"),
		array(20000, "Married"),
		array(46000, "Married"),
		array(69000, "Married")
	);
	$n_gaji = count($gaji);

	for($i=0; $i<$n_gaji; $i++){
		echo "Gaji sebesar = ".$gaji[$i][0]." Status = ".$gaji[$i][1]."<br>";
		if($gaji[$i][1]=="Single"){
			if($gaji[$i][0]<=32000 && $gaji[$i][0]>0){
				$pajak[$i]=$gaji[$i][0]*0.1;
			}
			else if($gaji[$i][0]>32000){
				$pajak[$i]=($gaji[$i][0]-32000)*0.25;
			}
		}
		else if($gaji[$i][1]=="Married"){
			if($gaji[$i][0]<=64000 && $gaji[$i][0]>0){
				$pajak[$i]=$gaji[$i][0]*0.1;
			}
			else if($gaji[$i][0]>64000){
				$pajak[$i]=($gaji[$i][0]-64000)*0.25;
			}
		}
		echo "Pajak sejumlah = ".$pajak[$i]."<br>";
	}
?>