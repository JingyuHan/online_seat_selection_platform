<!DOCTYPE html>
<html>
<head>
<link href="title.ico" rel="shortcut icon"/>
<title>TYUT三毛话剧社--在线选座</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="eerbabao.top,太原理工大学,三毛话剧社,在线选座">
<meta name="description" content="eerbabao.top,太原理工大学,三毛话剧社,在线选座">
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

$sql="SELECT seat_id FROM z0saled";

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
		
		<h1>票价：10元</h1>
		<h3>请如实填入您的手机号，以便我们与您联系：</h3>
		<p><input id="tel" name="WIDreceive_mobile" type="text" onfocus="$('#ck').hide()"/></p><span id="ck" style="color:red;display:none">手机格式不正确！</span><br/>
		<div id="yon" align="center"><button style="margin-right:50px" onclick="check(document.getElementById('tel'))">确认</button><button class="close">取消</button></div>
		
		</div>
	</div>
</div>
<div id="zhezhao"></div>

<script src="js/jquery.min.js"></script>
<script src="js/qrcode.js"></script>
<script src="js/jquery-1.11.0.min.js"></script> 
<script src="js/mjquery.seat-charts.min.js"></script> 

<script src="js/0mseat.js"></script>

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
							console.log(id+"----"+label+"----"+getseat(label));
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
			 //var_dump(xmlHttp.responseText);
					//console.log(str);
					if(xmlHttp.responseText=='1'){
						document.getElementById("msg").innerHTML="抱歉，这个座位已经被抢走了，重新选一个吧！";
						$("#shut").show();
					}else if(xmlHttp.responseText=='0'){
						rseat=getseat(label);
						document.getElementById("infoseat").innerHTML="您的座位信息是："+rseat.split("_")[0]+"排"+rseat.split("_")[1]+"号";
						$("#one").hide();
						$("#two").show();
					}else{
						document.getElementById("msg").innerHTML="抱歉，您已经选过座位了，不可以再选了！";
						$("#shut").show();
					}
					
					//document.getElementById("msg").innerHTML=xmlHttp.responseText;
					
				 } 
				}
				
				
				
		});
function getChanged() 
				{ 
				if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
				 { 
					eval('un=' + xmlHttp.responseText + ';');
					sc.get(un).status('unavailable');
					
				 } 
				}
		function check(tel)
				{
					
					
					if(tel.value.match(/^(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/)===null){
						tel.value="";
						$("#ck").show();
						
					}
					else{
					setsaled(getChanged,id,label,getseat(label),tel.value);
					console.log(""+id+label+getseat(label)+tel.value);
					$(".close").click();
				}
				}
				
		window.onbeforeunload = function (){ 
			if(label!=null)
				unlockseat(label);
				
			return "确定要离开么？";
		}
		
</script>
		


</body>
</html>
