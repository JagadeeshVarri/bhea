<?php

$val = fgets(STDIN);

for ($i=2; $i <=$val ; $i++) { 
	$c = 0;
	for ($j=1; $j <=$i/2; $j++) { 
		if ($i%$j == 0) {
			$c++;

		}
	}
	if ($c==2) {
		echo "$i ";
	}
}

  ?>