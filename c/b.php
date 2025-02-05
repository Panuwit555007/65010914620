<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ภาณุวิชญ์ ฉายเรือง(พี)</title>
</head>

<body>
	<h1>ภาณุวิชญ์ ฉายเรือง(พี)</h1>
    
<form method="post" action="">
    ตัวเลข<input type="number" name="a" min="1" 
    max="100"required autofocus><br><br>
    ชื่อ-สกุล <input type="text" name="b"required>
    <br>
    จังหวัด
    <select name="province">
    <option value="ขอนแก่น">ขอนแก่น</option>
    <option value="ขอนแก่น">มหาสารคาม</option>
    <option value="ขอนแก่น">ร้อยเอ็ด</option>
    <option value="ขอนแก่น">อุดรธานี</option>
    </select>
    <br>
    วันเดือนปีเกิด
    <input type="date" name="birthday"><br>
    <br><br>
    <button type="submit">OK</button>
    <button type="reset">ยกเลิก</button>
    <button type="ิีbutton"onClick="window.print(),;">พิมพ์</button>
  </form>
  <hr>
 
<p>
  <?php
   if(isset($_POST['Submit'])){
 echo @$_POST['a'];"<br>";
 echo @$_POST['b'];"<br>";
 echo @$_POST['province'];"<br>";
 echo @$_POST['birthday'];"<br>";
 }
 ?>
</body>
</html>