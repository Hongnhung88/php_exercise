<?php
	$mang= array(1,2,3,4,5,6,7);
	$gia_tri_lon_nhat = max($mang);
	$gia_tri_nho_nhat = min($mang);
	$tbc=array_sum($mang)/6;
	echo "cho số: ";
	for ($i=0; $i < count($mang) ; $i++) { 
		echo "$mang[$i] ,";	
	}echo "<br>";
	echo "giá trị lớn nhất: ".$gia_tri_lon_nhat."<br>"."giá trị nhỏ nhất: ".$gia_tri_nho_nhat."<br>"."trung binh cộng: ".$tbc;
?>