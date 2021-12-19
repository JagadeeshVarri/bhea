<?php
//perform arithmetic operations based on the given input

$val1 = fgets(STDIN);
$val2 = fgets(STDIN);

echo "Select operator: \n ";
echo "Addition : + \n Subtraction : - \n Multiplication : * \n ";
echo "Division : \ \n  Reminder : %\n";
$operator = fgets(STDIN);


switch ($operator) {
	case '+':

		echo $val1+$val2;
		break;
	case '-':

		echo $val1-$val2;
		break;
	case '*':

		echo $val1*$val2;
		break;
	case '/':

		echo $val1/$val2;
		break;
	case '%':

		echo $val1%$val2;
		break;
	
	default:
		echo "Invalid operator";
		break;
}

?>