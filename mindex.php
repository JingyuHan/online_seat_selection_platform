<!DOCTYPE html>
<html>
<head>
<link href="title.ico" rel="shortcut icon"/>
<title>TYUT三毛话剧社--在线选座</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="eerbabao.top,太原理工大学,三毛话剧社,在线选座">
<meta name="description" content="eerbabao.top,太原理工大学,三毛话剧社,在线选座">
<script type="text/javascript" src="http://qzonestyle.gtimg.cn/qzone/openapi/qc_loader.js" data-appid="101275330"  charset="utf-8"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.seat-charts.css">
<link rel="stylesheet" type="text/css" href="css/mstyle.css">
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

$sql="SELECT seat_id FROM msaled";

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
<div  style="width:100%;background:#eee"><div id="qq" style="margin:0 150px">未登录QQ</div></div>

<div class="wrapper">
	<table style="margin: 0 auto">
		<th>
			<img src="image/bg00.png" style="opacity:0.5"/>
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
<div id="three" align="center" style="display:none;padding:20px">
<h1>有些事您需要知道：</h3><br/>
 
	
	<h3 align="left"><1> 您需要有支付宝账号，因为票款需要支付宝支付。我们使用的是担保交易，所以您放心，您的资金安全是有保障的！</h3>
	<h3 align="left"><2> 在您支付完成后，页面会有2-3次的跳转，请您等待，因为最后跳转回我们的页面后，我们有重要的信息要提供给您！</h3>
	<h3 align="left"><3> 我们有QQ空间分享优惠活动，您需要登录您的QQ账号，在支付完成后，您可以点击“分享”图标将在线选座链接分享到您的空间中，当您的好友点击您分享的链接进行选座后，您将得到相应的现金返现！</h3>
   <br/>

  <span id="qqLoginBtn"></span>
<button class="shut" style="margin-left:50px">不登录了</button>
</div>
	<div id="one" align="center" style="display:none">
		<br/><h1 id="msg"></h1><br/><button class="shut">确定</button>
	</div>
	<div id="two" style="display:none">
		<h1 id="infoseat" align="center"></h1><br/>
		<h3 align="center">确定选这个座位么？</h3><br/>
		<div id="yon" align="center"><button id="yes" style="margin-right:50px">确定</button><button class="close">取消</button></div>
	</div>
<div id="four" style="display:none">
	<div align="center">
		<form name="alipayment" action="create/malipayapi.php" method="post" onsubmit="return check(document.getElementById('tel'))" target="_blank">
		<input name="seat_id" type="hidden" id="seat"/><input name="qq_1" type="hidden" id="qq1"/>
		<input name="qq_2" type="hidden" id="qq2"/>   <input name="qq_3" type="hidden" id="qq3"/>
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
<script src="js/mjquery.seat-charts.min.js"></script> 

<script src="js/mseat.js"></script>

<script type="text/javascript">

  

			var firstSeatLabel = 1;
			var rseat=null;
			var id=null;
			var label=null;
			var th= $(window).scrollTop()+120;
			var rw =Math.abs($(window).width()-600)/2;
			var h =$(document).height();
			
			$(document).ready(function() {
				var h =document.body.clientHeight;
				console.log("sdfasdfasdf");
					$(".showbox").animate({top:th,opacity:'show',width:600,height:440,left:rw},500);
					$("#zhezhao").css({
						display:"block",height:h
					});					
					$("#three").show();
								
			
				
				
				
				var $cart = $('#selected-seats'),
					$counter = $('#counter'),
					$total = $('#total'),
					sc = $('#seat-map').seatCharts({
					map: [
						'______ffffffffff_ffffffffffffffffffffff_ffffffffff',
						'_____fffffffffff_ffffffffffffffffffffff_fffffffffff',
						'____ffffffffffff_ffffffffffffffffffffff_ffffffffffff',
						'___fffffffffffff_ffffffffffffffffffffff_fffffffffffff',
						'___fffffffffffff_ffffffffffffffffffffff_fffffffffffff',
						'__ffffffffffffff_ffffffffffffffffffffff_ffffffffffffff',
						'_fffffffffffffff_ffffffffffffffffffffff_fffffffffffffff',
						'_',
						'ffffffffffffffff_ffffffffffffffffffffff_ffffffffffffffff',
						'ffffffffffffffff_ffffffffffffffffffffff_ffffffffffffffff',
						'ffffffffffffffff_ffffffffffffffffffffff_ffffffffffffffff',
						'ffffffffffffffff_ffffffffffffffffffffff_ffffffffffffffff',
						'ffffffffffffffff_ffffffffffffffffffffff_ffffffffffffffff',
						'ffffffffffffffff_ffffffffffffffffffffff_ffffffffffffffff',
						'_fffffffffffffff_ffffffffffffffffffffff_fffffffffffffff',
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
								console.log(id);
								//var th= $(window).scrollTop()+($(window).height()-650)/2;
								//var th= $(window).scrollTop()+120;
								
								//var h =document.body.clientHeight;
								//var rw =Math.abs($(window).width()-600)/2;
								$(".showbox").animate({top:th,opacity:'show',width:600,height:240,left:rw},500);
								$("#zhezhao").css({
									display:"block",height:$(document).height()
								});								
								
								$("#one").show();
								$("#three").hide();
								$(".shut").hide();
								document.getElementById("msg").innerHTML="请稍等，正在尝试锁定……";
								
								lockseat(lockok,label);
								
								return "unavailable"
						} 
						
					}
				});

				 //调用QC.Login方法，指定btnId参数将按钮绑定在容器节点中
   QC.Login({
       //btnId：插入按钮的节点id，必选
       btnId:"qqLoginBtn",    
       //用户需要确认的scope授权项，可选，默认all
       scope:"all",
       //按钮尺寸，可用值[A_XL| A_L| A_M| A_S|  B_M| B_S| C_S]，可选，默认B_S
       size: "A_L"
   }, function(reqData, opts){//登录成功
       //根据返回数据，更换按钮显示状态方法
	   $(".shut").click();
       var dom = document.getElementById("qq"),
       _logoutTemplate=[
            //头像
            '<span><img src="{figureurl}" class="{size_key}"/></span>',
            //昵称
            '<span>{nickname}</span>',
            //退出
            '<span><a href="javascript:QC.Login.signOut();">退出</a></span>'    
       ].join("");
       dom && (dom.innerHTML = QC.String.format(_logoutTemplate, {
           nickname : QC.String.escHTML(reqData.nickname), //做xss过滤
           figureurl : reqData.figureurl
       }));

	  if(QC.Login.check()){//如果已登录
						QC.Login.getMe(function(openId, accessToken){
							opid=openId.toString();
							
						});
					}
	

   }, function(opts){//注销成功
         alert('QQ登录 注销成功');
   }
);
				
				$(".close").click(function(){
					unlockseat(label);
					$(this).parents(".showbox").animate({top:0,opacity: 'hide',width:0,height:0,left:0},500);
					$("#zhezhao").css("display","none");
					$("#four").hide();
					$("#two").hide();
					sc.get(id).status('available');
					label=null;
					
				});
				$(".shut").click(function(){
					getsaled(getChanged);
					$(this).parents(".showbox").animate({top:0,opacity: 'hide',width:0,height:0,left:0},500);
					$("#zhezhao").css("display","none");
					$("#msg").empty();
					$("#one").hide();
					$("#three").hide();
					label=null;
					
				});
				
				$("#yes").click(function(){
					
					$("#two").hide();
					$("#four").show();
					$("#msg").empty();
					document.getElementById("seat").value=id+"+"+label+"+"+rseat;
					
					document.getElementById("qq1").value=opid.substr(0,11);
					document.getElementById("112").value=opid.substr(11,22);
					document.getElementById("qq3").value=opid.substr(22,33);
					
							
				});
				
				D48846B7FB29D580F45F6D89710E67
				
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
