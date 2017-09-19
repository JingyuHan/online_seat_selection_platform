<!DOCTYPE html>
<html>
<head>
<title>TYUT三毛话剧社--领票凭证</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="eerbabao.top,太原理工大学,三毛话剧社,在线选座">
<meta name="description" content="eerbabao.top,太原理工大学,三毛话剧社,在线选座">

</head>
<body>
<script src="../js/qrcode.js"></script>
<?php
require_once("alipay.config.php");
require_once("lib/alipay_notify.class.php");
//计算得出通知验证结果
$alipayNotify = new AlipayNotify($alipay_config);
$verify_result = $alipayNotify->verifyReturn();
if($verify_result) {//验证成功
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//请在这里加上商户的业务逻辑程序代码
	
	//——请根据您的业务逻辑来编写程序（以下代码仅作参考）——
    //获取支付宝的通知返回参数，可参考技术文档中页面跳转同步通知参数列表

	//商户订单号

	$out_trade_no = $_GET['out_trade_no'];

	//支付宝交易号

	$trade_no = $_GET['trade_no'];

	//交易状态
	$trade_status = $_GET['trade_status'];

	$buyer_email = $_GET['buyer_email'];
	
	$receive_mobile = $_GET['receive_mobile'];
	
	$body=explode("+",$_GET['body']);
	
	$rseat=$body[2];

    if($_GET['trade_status'] == 'WAIT_SELLER_SEND_GOODS') {
		//判断该笔订单是否在商户网站中已经做过处理
			//如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
			//如果有做过处理，不执行商户的业务程序
			require("../php/hsetsaled.php");
			
			require("../send/alipayapi.php");
			
    }
    
	echo "<script> ";
	echo  "var content=\"sm$receive_mobile$rseat\"";
	echo "</script>";
		
	//echo "验证成功<br />";
	//echo "trade_no=".$trade_no;

	//——请根据您的业务逻辑来编写程序（以上代码仅作参考）——
	
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
}
else {
    //验证失败
    //如要调试，请看alipay_notify.php页面的verifyReturn函数
    echo "验证失败";
}
?>
        <div align="center">
		<div id="qrcode" align="center"></div>
		<h3 align="center">这个二维码中包含了您的相关信息，是领票的凭证，<br/>请您务必用手机拍下来或截图保存，在领票时必须出示该二维码。</h3><br/>
		<div align="center">
		<input type="checkbox" id="check">   我知道这张二维码的重要性，已经保存好了！</input><br/>
		<a href="../index.php"><button>还要选座！</button></a>
		</div>
	</div>



<script>
	window.onload=function() {
		document.getElementById("check").checked=false;
		var qrcode = new QRCode(document.getElementById("qrcode"));
		qrcode.makeCode(content);
		
				
				
	}
	
</script>
	
	
	
	
	
    </body>
</html>