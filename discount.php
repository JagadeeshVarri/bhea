// Deduct the discount percent from principal.

<?php

$mrp = fgets(STDIN);
$discount = fgets(STDIN);

$discount_amt = ($discount/100)*$mrp;

print("$discount_amt  \n");	//dicount amount to be deducted

$final = $mrp - $discount_amt;

echo "$final \n";	//Finall amount price

	?>