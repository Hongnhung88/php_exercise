<?php
$sodien = 500;
$muc1=$sodien*450;
$muc2=(100*450)+($sodien-100)*600;
$muc3=(100*450)+(100*600)+($sodien-200)*750;
$muc4=(100*450)+(100*600)+(100*750)+($sodien-300)*900;
$muc5=(100*450)+(100*600)+(100*750)+(200*900)+($sodien-500)*1000;
$muc6=(100*450)+(100*600)+(100*750)+(200*900)+(500*1000)+($sodien-1000)*1200;
echo "số điện đã tiêu thụ: ".$sodien."KWh"."<br>";
if ($sodien < 0) {
	echo "không hợp lệ, vui lòng nhập lại!";
	/* tu so <100 */
}else if (0 < $sodien and $sodien <= 100) {
	echo "số tiền điện cần trả là: ".$muc1." đồng";
	/* tu so 101-200 */
}else if (100 < $sodien and $sodien<= 200) {
	echo "số tiền điện cần trả là: ".$muc2." đồng";
	/* tu so 201-300 */
}else if (200 < $sodien and $sodien<= 300) {
	echo "số tiền điện cần trả là: ".$muc3." đồng";
	/* tu so 301-500 */
}else if (300 < $sodien and $sodien <= 500) {
	echo "số tiền điện cần trả là: ".$muc4." đồng";
	/* tu so 501-1000 */
}else if (500 < $sodien and $sodien<= 1000) {
	echo "số tiền điện cần trả là: ".$muc5." đồng";
/* tu so >1000 */
}else if ($sodien > 1000) {
	echo"số tiền điện cần trả là: ".$muc6." đồng";
}
?>