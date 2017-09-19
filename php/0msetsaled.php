<?php
$id=$_GET["id"];
$label=$_GET["label"];
$rseat=$_GET["rseat"];
$tel=$_GET["tel"];
if(!empty($_SERVER["HTTP_CLIENT_IP"])){
  $cip = $_SERVER["HTTP_CLIENT_IP"];
}
else if(!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
  $cip = $_SERVER["HTTP_X_FORWARDED_FOR"];
}
else if(!empty($_SERVER["REMOTE_ADDR"])){
  $cip = $_SERVER["REMOTE_ADDR"];
}
$con = mysql_connect('localhost', 'root', '1994928Han');
if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }
mysql_query("set names utf8");
mysql_select_db("sanmao", $con);


$sql="INSERT INTO z0saled(seat_id,seat_label,seat_real,tel,ip)VALUES('$id','$label','$rseat','$tel','$cip')";

mysql_query($sql);
mysql_close($con);
?>
