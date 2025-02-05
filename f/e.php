<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>>ภาณุวิชญ์ ฉายเรือง(พี)</title>
</head>

<body>
<h1>ภาณุวิชญ์ ฉายเรือง(พี)</h1> 
<form method="post" action="">
ราคาสินค้ารวม <input type="number" ื name="a" min="0" autofocus required> 
<button type="submit" name="Submit">OK</button>
</form>
<hr>

<?php

if(isset($_POST['Submit'])){
$price = $_POST['a'];
if ($price >= 5000) {
	$sale = $price*0.15;
}else if ($price >= 2000) {
	$sale = $price*0.10;
}else if ($price >= 1000) {
	$sale = $price*0.5;
}else{
	$sale =0; 
}
$net = $price-$sale;
echo "ราคาสินค้ารวม = ".number_format($price,2)." บาท <br>";
echo "ส่วนลดที่ได้รับ =".number_format($sale,2)." บาท <br>";
echo "จํานวนเงินที่จ่ายจริง =".number_format($net,2)." บาท <br>";
}
?>
</body>
</html>