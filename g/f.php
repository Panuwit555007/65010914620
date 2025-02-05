<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ภาณุวิชญ์ ฉายเรือง(พี)</title>
</head>

<body>
<h1>ภาณุวิชญ์ ฉายเรือง(พี) สูตรคูณ while</h1>

<form method="post" action="">
	เเม่สูตรคูณ<input type="number" min="2" max="1000 " name="a" required 			    autofocus>
    <button type="submit" name="Submit">OK</button>
</form> <hr>

<?php
if(isset($_POST['Submit'])){
	$m = $_POST['a'];
	$i=1;
	while($i<=12){
		$x = $m * $i ;
?>
	<?=$m;?> x <?=$i;?> = <?=$x;?> <br>
<?php
$i++;
	} // end for
} // end if
?>

</body>
</html>