<?php
	$tong= 0;
	$i=1;
	while ($i<=100){
		$tong+=$i;
		$i++;
	}
	echo "tổng các số từ 1 đến 100 là: ".$tong."<br>";
	echo "tổng bình phương  các số từ 1-100 là: ".($tong*$tong);
?>