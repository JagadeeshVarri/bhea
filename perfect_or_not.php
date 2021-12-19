<?php

//perfect or not

$val = fgets(STDIN);
$sum =0 ;

for ($i=1; $i < $val; $i++) { 
	if($val%$i==0) {
		$sum = $sum + $i;

	}
}

if($sum==$val){
	echo "$val is perfect number";
}
else{
	echo "$val is not a perfect number";
}

?>