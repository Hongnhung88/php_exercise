<?php
	$i = 20;
	echo "các số chia hết cho 3 trong khoảng từ 20-50 là: ";
	while ( $i <= 50) {
		if ($i % 3 == 0) {
			echo $i.", " ;	
		}
		$i++;
	}
?>