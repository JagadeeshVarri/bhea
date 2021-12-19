<?php

//program to calculate the simple interest and compound interest

$principal = 40000;
$rate_of_interest = 6.0;
$time = 4;

//Simple Interest

$simple_interest = ($principal*$rate_of_interest*$time)/100;

echo $simple_interest;

//Compound Interest
$compound_interest = $principal*pow(1+($rate_of_interest/100), $time) - $principal;

echo $compound_interest;
?>