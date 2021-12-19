<?php


$basic = fgets(STDIN);

//function to calculate the HRA
function homeAllowance($basic){
	return 0.4*$basic;
}
//function to calculate the DA
function dearAllowance($basic){
	return 0.8*$basic;
}

$tax = 0.1*$basic;

 echo $basic+homeAllowance($basic)+dearAllowance($basic)-$tax;
?>