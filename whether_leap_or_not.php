<?php

echo "Enter year to check, whether the given year is leap or not : \n";
$year = fgets(STDIN);

if ($year%4 == 0) {
	if ($year%100==0) {
		if ($year%400 ==0) {
			echo "$year is leap year.";
		}
		else{
			echo "$year is not a leap year.";
		}
		
	}
	else{
			echo "$year is a leap year.";
		}
		
}
else{
			echo "$year is not a leap year.";
		}


?>