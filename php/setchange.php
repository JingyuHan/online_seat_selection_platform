<?php
$con = mysql_connect('localhost', 'root', '1994928Han');
if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }
mysql_query("set names utf8");
mysql_select_db("sanmao", $con);


$sql="SELECT myid FROM saled WHERE myid=$out_trade_no";
$query=mysql_query($sql);



if(mysql_num_rows($query)==0){
	$date=mysql_fetch_row($query);
	if($date[0]=='1'){
		echo "1";
	}else{
		$sql="UPDATE temp SET flag = '1' WHERE seat_lable=$label";
		if(mysql_query($sql)){
		echo "0";
		}
	}
}else{
	$sql="INSERT INTO temp(id,seat_lable,flag)VALUES(NULL,$label,'1')";
	if(mysql_query($sql)){
		echo "0";
	}
	
}

mysql_close($con);

?>
