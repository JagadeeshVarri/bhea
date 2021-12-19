	//calculate area of the triangle, circle, sqare and rectangle.


	<?php

	//1/2(b.h);

	//lw
	//pi r2


	$length = 10;
	$breadth = 20;
	$radius = 10;
	$base = 10;
	$height =20;
	$side = 20;
	echo "Choose any one of these : \n";
	echo "Square : 1 \n";
	echo "Rectangle : 2 \n";
	echo "Circle : 3 \n";
	echo "Triangle : 4 \n";
	echo"Exit : 5 \n";
	$option = fgets(STDIN);
		while ($option!=5) {
		switch ($option) {
		case 1:
			$area = $side **2;
			echo "Area of Square is :".$area."\n";
			echo "Choose any one of these : \n";
	echo "Square : 1 \n";
	echo "Rectangle : 2 \n";
	echo "Circle : 3 \n";
	echo "Triangle : 4 \n";
	echo"Exit : 5 \n";
	$option = fgets(STDIN);
			break;

		case 2:
			$area = $length * $breadth;
			echo "Area of Rectangle is :".$area."\n";
			echo "Choose any one of these : \n";
	echo "Square : 1 \n";
	echo "Rectangle : 2 \n";
	echo "Circle : 3 \n";
	echo "Triangle : 4 \n";
	echo"Exit : 5 \n";
	$option = fgets(STDIN);
			break;
		case 3:
			$area = pi()*($radius**2);
			echo "Area of Circle is :".$area."\n";
			echo "Choose any one of these : \n";
	echo "Square : 1 \n";
	echo "Rectangle : 2 \n";
	echo "Circle : 3 \n";
	echo "Triangle : 4 \n";
	echo"Exit : 5 \n";
	$option = fgets(STDIN);
			break;
		case 4:
			$area = 1/2*($base*$height);
			echo "Area of Triangle is :".$area."\n";
			echo "Choose any one of these : \n";
	echo "Square : 1 \n";
	echo "Rectangle : 2 \n";
	echo "Circle : 3 \n";
	echo "Triangle : 4 \n";
	echo"Exit : 5 \n";
	$option = fgets(STDIN);
			break;
		default:
			echo"Invalid Option";
					
			echo "Choose any one of these : \n";
	echo "Square : 1 \n";
	echo "Rectangle : 2 \n";
	echo "Circle : 3 \n";
	echo "Triangle : 4 \n";
	echo"Exit : 5 \n";
	$option = fgets(STDIN);
			break;
	}		
		}
	
	?>