<?php 

//Fibonacci series - 0,1,1,2,3,5,8....

$val = fgets(STDIN);

$v1 = 0;
$v2 = 1;
$temp=0;

echo"$v1  $v2 ";
while ($temp<$val) {
	$temp = $v1+$v2;
	$v1 = $v2;
	$v2 = $temp;
	echo" $v2 ";
}


 ?>