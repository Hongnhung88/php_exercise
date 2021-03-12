<?php
	$tong= 0;
	$i=1;
	while ($i<=100){
		$tong+=$i;
		$i++;
	}
	echo "tổng các số từ 1 đến 100 là: ".$tong."<br>";
	$j = 20;
	echo "các số chia hết cho 3 trong khoảng từ 20-50 là: ";
	while ( $j <= 50) {
		if ($j % 3 == 0) {
			echo $j.", " ;	
		}
		$j++;
	}
?>