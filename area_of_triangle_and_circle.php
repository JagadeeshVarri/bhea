<?php

//To find the area of triangle

$base = (int)fgets(STDIN);
$height = (int)fgets(STDIN);

$area_of_triangle  = 1/2*($base*$height);

echo $area_of_triangle;


//To find the area of circle
$radius = (int)readline("Enter the value of radius");
$area_of_circle = pi()*$radius*$radius; 


echo $area_of_circle;


?>