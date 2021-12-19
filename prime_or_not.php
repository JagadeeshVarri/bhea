<?php


$val = fgets(STDIN);
$count = 0;
if ($val<2) {
	echo "$val is not prime number. \n";
}
elseif ($val==2) {
	echo "$val is a prime number. \n";	
}

else{
	for ($i=2; $i <=$val/2 ; $i++) { 
			if($val%$i==0){
				$count = 1;
			}
		}
	
		if ($count>0) {
		echo "$val is not prime number. \n";
		}
		else{
			echo "$val is a prime number. $count\n";
		}
}

?>