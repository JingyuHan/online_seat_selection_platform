<?php
include ("html/xuanzuo1.html");
$con = mysql_connect('localhost', 'root', '1994928Han');
if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }
mysql_query("set names utf8");
mysql_select_db("sanmao", $con);

$sql="SELECT seat_id FROM saled";

$result = mysql_query($sql);
$arr=array();
while($rec=mysql_fetch_assoc($result)){
	$arr[]=$rec["seat_id"];
}
echo "<script> var un=new Array();un=";
echo  json_encode($arr);
echo "</script>";
mysql_close($con);
include ("html/xuanzuo2.html");
?>
