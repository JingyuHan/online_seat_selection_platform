<?php
$label=$_GET["label"];
$con = mysql_connect('localhost', 'root', '1994928Han');
if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }
mysql_query("set names utf8");
mysql_select_db("sanmao", $con);

$sql="UPDATE mtemp SET flag = '0' WHERE seat_lable=$label";
mysql_query($sql);

mysql_close($con);

?>
