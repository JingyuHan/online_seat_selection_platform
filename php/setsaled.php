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

			$sql="INSERT INTO saled(myid,aliid,status,buyerid,name,type,seat_id,seat_label,seat_real,tel,time)VALUES('$out_trade_no','$trade_no','2','$buyer_email',NULL,'1','$id','$label','$rseat','$receive_mobile','0000-00-00 00:00:00')";

			mysql_query($sql);
}
			mysql_close($con);
?>
