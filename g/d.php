<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ภาณุวิชญ์ ฉายเรือง</title>
</head>

<body>
<h1>ภาณุวิชญ์ ฉายเรือง(พี)</h1>

<form method="post" action="">
	จำนวน<input type="number" min="1" max="400" name="a" required autofocus>
    <button type="submit" name="Submit">OK</button>
</form> <hr>

<?php
if(isset($_POST['Submit'])){
	$c = $_POST['a'];
	echo "แสดงจำนวน $c รูป <br><br>";
	for($i=1; $i<=$c; $i++){
?>
	<img src="6.jpg" width="300">
<?php
	} // end for
} // end if
?>

</body>
</html>