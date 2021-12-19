<?php

$sale_amount = fgets(STDIN);

if($sale_amount>5000){
	$final_amount = $sale_amount - 0.1*$sale_amount;
	echo "Amount after applying discount is $final_amount";

}
else{
	$final_amount = $sale_amount - 0.05*$sale_amount;

	echo "Amount after applying discount is $final_amount";
}

?>