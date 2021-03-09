<?php
	$a = "EV2009";
	$b = "Tấm hợp kim nhôm ngoài trời EV2009";
	$soluong = 500;
	$dongia = 160000;
	$vat = 0.05;
	$kthue = $soluong * $dongia;
	$cothue = $soluong * $dongia * $vat;
	echo "mã sản phẩm: ".$a."<br>"."tên sản phẩm: ".$b."<br>"."số lượng: ".$soluong."<br>"."đơn giá: ".$dongia."<br>"."hằng số VAT: ".$vat."<br>"."chưa trừ thuế: ".$kthue."<br>"."đã trừ thuế: ".$cothue;
?>