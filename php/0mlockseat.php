<?php
$label=$_GET["label"];
$con = mysql_connect('localhost', 'root', '1994928Han');
if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }
mysql_query("set names utf8");
mysql_select_db("sanmao", $con);
$str=$_SERVER['REMOTE_ADDR']+"";
$sql="SELECT ip FROM z0saled WHERE ip=$str";
$query=mysql_query($sql);



if(true){

$sql="SELECT flag FROM z0temp WHERE seat_lable=$label";
$query=mysql_query($sql);



if(mysql_num_rows($query)){
	$date=mysql_fetch_row($query);
	if($date[0]=='1'){
		echo "1";
	}else{
		$sql="UPDATE z0temp SET flag = '1' WHERE seat_lable=$label";
		if(mysql_query($sql)){
		echo "0";
		}
	}
}else{
	$sql="INSERT INTO z0temp(id,seat_lable,flag)VALUES(NULL,$label,'1')";
	if(mysql_query($sql)){
		echo "0";
	}
	
}
}else {echo "2";}
mysql_close($con);

?>
