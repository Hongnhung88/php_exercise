<?php
	$mang  = [1,2,3,4,5,6,7];
	$gia_tri_lon_nhat = max($mang);
	$gia_tri_nho_nhat = min($mang);
	$tbc=($mang[0]+$mang[1]+$mang[2]+$mang[3]+$mang[4]+$mang[5]+$mang[6])/6;
	echo "Cho số: 1, 2, 3, 4, 5, 6, 7. "."<br>"."giá trị lớn nhất: ".$gia_tri_lon_nhat."<br>"."giá trị nhỏ nhất: ".$gia_tri_nho_nhat."<br>"."trung binh cộng: ".$tbc;
?>