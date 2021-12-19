<?php

$val = fgets(STDIN);

$temp = $val;

$rev = 0;
//armstrong  is 153 = 1^3 + 5^3 + 3^3

while (floor($val)) {
	$rem = $val%10;
	$rev = $rev*10+ $rem;
	$val = $val/10;	
}

if ($temp == $rev) {
	echo "$temp is a  Palindrome . \n";
}
else{
	echo "$temp is not a Palindrome \n";
}
?>