<?php

//Calculate Loss or Profit

$cp = fgets(STDIN);
$sp = fgets(STDIN);

if ($sp>$cp) {
     $profit = $sp-$cp;
	echo "Profit  is $profit";
}
else{
    $loss = $cp-$sp;
	echo "Loss  is ".$loss;
}

?>