<?php
	$chuoi = "rayy@example.com";
	$xuat = ' ';
	for ($i=0; $i < strlen($chuoi)- 1; $i++) { 
		if ($chuoi[$i] === '@') {
			break;
		}
		$xuat .= $chuoi[$i];
	}
	echo " output is $xuat";
?>