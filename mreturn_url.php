<!DOCTYPE html>
<html>
<head>
<title>TYUT三毛话剧社--领票凭证</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="eerbabao.top,太原理工大学,三毛话剧社,在线选座">
<meta name="description" content="eerbabao.top,太原理工大学,三毛话剧社,在线选座">
<style>
*{margin:0;padding:0;list-style-type:none;}
body{
	font-family:'microsoft yahei';
	background-image:url(../image/bbg.jpg);
	}
	button {background: #09f none repeat scroll 0 0;color: #fff;padding: 8px 15px;text-align: center;width: 160px;}
</style>
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
	
	$label=$body[1];
	$id=$body[0];
	$rseat=$body[2];
	$qq=$body[3];


    if($_GET['trade_status'] == 'WAIT_SELLER_SEND_GOODS') {
		//判断该笔订单是否在商户网站中已经做过处理
			//如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
			//如果有做过处理，不执行商户的业务程序
			require("../php/msetsaled.php");
			
			require("../send/alipayapi.php");
			
    }
    */
	echo "<script> ";
	echo  "var content=\"sm$receive_mobile$rseat\";";
	//echo  "var content=\"sm555555555\";";
	echo "var qq=$qq";
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
       <div align="center"><br/><br/><br/><br/><br/>
		<div id="qrcode" align="center"></div><br/><br/>
		<h1 align="center">这个二维码中包含了您的相关信息，是领票的凭证，<br/>请您务必用手机拍下来或截图保存，在领票时必须出示该二维码。</h1><br/>
		<div align="center">
		<input type="checkbox" id="check" style="zoom:200%">   <span style="font-size:27px">我知道这张二维码的重要性，已经保存好了！</span></input><br/><br/>
		<br/><br/>
		<script type="text/javascript">
		var content="sm5555555";
		var qq="D48846B7FB29D580F45F6D89710E6756";
		(function(){
		var p = {
		url:location.href,
		showcount:'0',/*是否显示分享总数,显示：'1'，不显示：'0' */
		desc:'',/*默认分享理由(可选)*/
		summary:'',/*分享摘要(可选)*/
		title:'三毛剧社在线选票',/*分享标题(可选)*/
		site:'',/*分享来源 如：腾讯网(可选)*/
		pics:qq, /*分享图片的路径(可选)*/
		style:'101',
		width:142,
		height:30
		};
		var s = [];
		for(var i in p){
		s.push(i + '=' + encodeURIComponent(p[i]||''));
		}
		document.write(['<a  version="1.0" class="qzOpenerDiv" href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?',s.join('&'),'" target="_blank">分享</a>'].join(''));
		})();
		</script>	
		<br/>

		<a href="../index.php"><button style="font-size:20px;margin-left:440px">还要选座</button></a><br/>
		</div>
	</div>


<script src="http://qzonestyle.gtimg.cn/qzone/app/qzlike/qzopensl.js#jsdate=20111201" charset="utf-8"></script>
<script>
	window.onload=function() {
		document.getElementById("check").checked=false;
		var qrcode = new QRCode(document.getElementById("qrcode"));
		qrcode.makeCode(content);
		
				
				
	}
	
</script>
	
	
	
	
	
    </body>
</html>