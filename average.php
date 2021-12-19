
<?php

//program to find the average
$sub1_marks = 70;
$sub2_marks = 90;
$sub3_marks = 80;

$avg = ($sub1_marks+$sub2_marks+$sub3_marks)/3;
if ($avg<35) {
	
	echo "Fail";
}
elseif ($avg>=35 && $avg<50) {
	echo "C Grade";
}
elseif($avg>=50 && $avg<70){
	echo "B Grade. \n";
}
elseif($avg<=70 && $avg>80)
{
	echo "A Grade \n";
}
elseif ($avg>=80 && $avg<=100) {
	echo "O Grade. \n";
}
?>