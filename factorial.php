<?php 

//factorial of the given number

$val = fgets(STDIN);

$fact =1;

while ($val>1) {
	$fact = $val*$fact;
	$val--;
}

echo "Factorial is $fact \n";

 ?>