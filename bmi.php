<?php

//Calculating the BMI based on the given height and weight of the user.


$height = fgets(STDIN); //Height should be in metres
$weight = fgets(STDIN); //Weight will be in kg



$bmi = $weight/($height**2);

echo "The BMI is $bmi";

?>