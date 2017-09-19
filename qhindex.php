<!DOCTYPE html>
<html>
<head>
<link href="title.ico" rel="shortcut icon"/>
<title>TYUT三毛话剧社--在线选座</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="eerbabao.top,太原理工大学,三毛话剧社,在线选座">
<meta name="description" content="eerbabao.top,太原理工大学,三毛话剧社,在线选座">
<link rel="stylesheet" type="text/css" href="css/jquery.seat-charts.css">
<link rel="stylesheet" type="text/css" href="css/hstyle.css">
<link href="css/sucaijiayuan.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
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
?>

<div class="wrapper">
	  <script type="text/javascript">
(function(){
var p = {
url:location.href,
showcount:'0',/*是否显示分享总数,显示：'1'，不显示：'0' */
desc:'',/*默认分享理由(可选)*/
summary:'',/*分享摘要(可选)*/
title:'',/*分享标题(可选)*/
site:'',/*分享来源 如：腾讯网(可选)*/
pics:'', /*分享图片的路径(可选)*/
style:'102',
width:88,
height:30
};
var s = [];
for(var i in p){
s.push(i + '=' + encodeURIComponent(p[i]||''));
}
document.write(['<a style="display:none" version="1.0" class="qzOpenerDiv" href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?',s.join('&'),'" target="_blank">分享</a>'].join(''));
})();
</script>
<script src="http://qzonestyle.gtimg.cn/qzone/app/qzlike/qzopensl.js#jsdate=20111201" charset="utf-8"></script>
	<table style="margin: 0 auto">
		<th>
			<img src="image/bg0.png" style="opacity:0.5"/>
		</th>
		<th>
			
			<div class="container">
				<div id="seat-map">
				<div class="front-indicator"><h1>舞 台<h1></div>
				</div>
				
			</div>
			
		</th>
  </table>

</div>


<div class="showbox" id="sb">
<h2>座位信息</h2><br/>
	<div id="one" align="center">
		<br/><h1 id="msg"></h1><br/><button id="shut">确定</button>
	</div>
	<div id="two" style="display:none">
		<h1 id="infoseat" align="center"></h1><br/>
		<h3 align="center">确定选这个座位么？</h3><br/>
		<div id="yon" align="center"><button id="yes" style="margin-right:50px">确定</button><button class="close">取消</button></div>
	</div>
<div id="four" style="display:none">
	<div align="center">
		<form name="alipayment" action="create/halipayapi.php" method="post" onsubmit="return check(document.getElementById('tel'))" target="_blank">
		<input name="seat_id" type="hidden" id="seatid"/><input name="seat_label" type="hidden" id="seatlabel"/><input name="seat_real" type="hidden" id="seatreal"/>
		<h1>票价：10元</h1>
		<h3>请如实填入您的手机号，以便我们与您联系：</h3>
		<p><input id="tel" name="WIDreceive_mobile" type="text" onfocus="$('#ck').hide()"/></p><span id="ck" style="color:red;display:none">手机格式不正确！</span><br/>
		<div id="yon" align="center"><button type="submit" style="margin-right:50px">支付宝支付</button><button class="close">取消</button></div>
		</form>
		</div>
	</div>
</div>
<div id="zhezhao"></div>

<script src="js/jquery.min.js"></script>
<script src="js/qrcode.js"></script>
<script src="js/jquery-1.11.0.min.js"></script> 
<script src="js/hjquery.seat-charts.min.js"></script> 

<script src="js/hseat.js"></script>

<script>
			var firstSeatLabel = 1;
			var rseat=null;
			var id=null;
			var label=null;
			
			$(document).ready(function() {
			
				
				
				var $cart = $('#selected-seats'),
					$counter = $('#counter'),
					$total = $('#total'),
					sc = $('#seat-map').seatCharts({
					map: [
						'_____fff__ffffffffffffffffffff_fff_____',
						'____ffff_fffffffffffffffffffff_ffff____',
						'___fffff__ffffffffffffffffffff_fffff___',
						'___fffff__fffffffffffffffffff__fffff___',
						'___fffff__fffffffffffffffffff__fffff___',
						'__ffffff_fffffffffffffffffffff_ffffff__',
						'__ffffff__ffffffffffffffffffff_ffffff__',
						'__ffffff_fffffffffffffffffffff_ffffff__',
						'_fffffff_ffffffffffffffffffff__fffffff_',
						'_fffffff_fffffffffffffffffffff_fffffff_',
						'_fffffff_ffffffffffffffffffff__fffffff_',
						'ffffffff_fffffffffffffffffffff_ffffffff',
						'ffffffff_ffffffffffffffffffff__ffffffff',
						'ffffffff_fffffffffffffffffffff_ffffffff',
						'_',
						'___fffff____fffffffffffffff____fffff___',
						'___fffff____fffffffffffffff____fffff___',
						'___fffff____fffffffffffffff____fffff___',
						'___fffff____fffffffffffffff____fffff___',
						'___fffff____fffffffffffffff____fffff___',
						'___fffff____fffffffffffffff____fffff___',
						'___fffff____fffffffffffffff____fffff___',
						'___fffff____fffffffffffffff____fffff___',
						'___fffff____fffffffffffffff____fffff___',
						'___fffff____fffffffffffffff____fffff___',
						'_fffffffffffffffffffffffffffffffffffff_',
						'_fffffffffffffffffffffffffffffffffffff_',
						'_fffffffffffffffffffffffffffffffffffff_',
						'_fffffffffffffffffffffffffffffffffffff_',
						'_fffffffffffffffffffffffffffffffffffff_',
					],
					seats: {
						f: {
							
							classes : 'first-class', //your custom CSS class
						},
											
					
					},
					naming : {
						top : false,
						getLabel : function (character, row, column) {
							return firstSeatLabel++;
						},
					},
					
					click: function () {
						if (this.status() == 'available') {
								id=this.settings.id;
								label=this.settings.label;
							
								//var th= $(window).scrollTop()+($(window).height()-650)/2;
								var th= $(window).scrollTop()+120;
								
								var h =document.body.clientHeight;
								var rw =Math.abs($(window).width()-600)/2;
								$(".showbox").animate({top:th,opacity:'show',width:600,height:240,left:rw},500);
								$("#zhezhao").css({
									display:"block",height:$(document).height()
								});								
								
								$("#one").show();
								$("#shut").hide();
								document.getElementById("msg").innerHTML="请稍等，正在尝试锁定……";
								
								lockseat(lockok,label);
								
								return "unavailable"
						} 
						
					}
				});

				$(".close").click(function(){
					unlockseat(label);
					$(this).parents(".showbox").animate({top:0,opacity: 'hide',width:0,height:0,left:0},500);
					$("#zhezhao").css("display","none");
					$("#four").hide();
					$("#two").hide();
					sc.get(id).status('available');
					label=null;
					
				});
				$("#shut").click(function(){
					getsaled(getChanged);
					$(this).parents(".showbox").animate({top:0,opacity: 'hide',width:0,height:0,left:0},500);
					$("#zhezhao").css("display","none");
					$("#msg").empty();
					$("#one").hide();
					label=null;
					
				});
				
				$("#yes").click(function(){
					
					$("#two").hide();
					$("#four").show();
					$("#msg").empty();
					document.getElementById("seatid").value=id;
					document.getElementById("seatlabel").value=label;
					document.getElementById("seatreal").value=rseat;
					
					
				});
				
				
				
				//this will handle "[cancel]" link clicks
				$('#selected-seats').on('click', '.cancel-cart-item', function () {
					//let's just trigger Click event on the appropriate seat, so we don't have to repeat the logic here
					sc.get($(this).parents('li:first').data('seatId')).click();
				});

				
				sc.get(un).status('unavailable');
		
				function lockok() 
				{ 
				if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
				 { 
					if(xmlHttp.responseText=='1'){
						document.getElementById("msg").innerHTML="抱歉，这个座位已经被抢走了，重新选一个吧！";
						$("#shut").show();
					}else{
						rseat=getseat(label);
						document.getElementById("infoseat").innerHTML="您的座位信息是："+rseat.split("_")[0]+"排"+rseat.split("_")[1]+"号";
						$("#one").hide();
						$("#two").show();
					}
					
					
					
				 } 
				}
				function getChanged() 
				{ 
				if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
				 { 
					eval('un=' + xmlHttp.responseText + ';');
					sc.get(un).status('unavailable');
					
				 } 
				}
				
				
		});

		function check(tel)
				{
					
					
					if(tel.value.match(/^(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/)===null){
						tel.value="";
						$("#ck").show();
						return false;
					}
					$(".close").click();
				}
		window.onbeforeunload = function (){ 
			if(label!=null)
				unlockseat(label);
				
			return "确定要离开么？";
		}
		
</script>
		


</body>
</html>
