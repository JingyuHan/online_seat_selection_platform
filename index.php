<!DOCTYPE html>
<html  style= "height:100%; width:100%">
<head>
<link href="title.ico" rel="shortcut icon"/>
<title>TYUT三毛话剧社--在线选座</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="qc:admins" content="16523532146552212176470" />
<meta name="Keywords" content="www.eerbabao.top,太原理工大学,三毛话剧社,在线选座">
<meta name="description" content="www.eerbabao.top,太原理工大学,三毛话剧社,在线选座">
<meta property="qc:admins" content="16523532146552212176470" />
<style>
	#next,button{
		width:280px;
		height:75px;
		font-size:35px; 
	border-radius: 40px;
    opacity: 0.9;
   	font-family:Microsoft YaHei;
    background-color: transparent;
	outline: none
	}
	#daojishi{
		width:280px;
		height:75px;
		border-radius: 40px;
		background-color:#000;
		position:relative;
		margin-left:379px;
		margin-top:180px;
		opacity:0.5
		
	}
	.letter{
	
    position:absolute;
    display:inline-block;
    text-align:center;
	font:normal 22px/22px 'MicroSoft YaHei';
	
}
</style>
</head>

<body style= "height:100%; width:100%; margin:0px;min-width:1700px;overflow:hidden">
<script src="js/jquery.min.js"></script>
	
<table width="100%" height= "100% " rules="rows" >
	<th bgcolor="#aca89a" style="hight:100%">
		<div id="ppast" style="width:0px;float:left" backgroundcolor="#aca89a">
			<a  href="http://v.youku.com/v_show/id_XODI0MzQ4NTky.html?from=y1.7-2#paction" target="_blank"><button style="float:right;border: 2px solid #222; color:#222;width:200px;height:45px">你好，打劫</button></a>
			<a  href="http://v.youku.com/v_show/id_XODgxMDE5MzMy.html?from=y1.7-2" target="_blank"><button style="float:right;border: 2px solid #222; color:#222;width:200px;height:45px;margin-top:20px;font-size:25px">我和我和她和她</button></a>
			<a  href="http://v.youku.com/v_show/id_XODgzMjg5MDk2.html?from=y1.7-2" target="_blank"><button style="float:right;border: 2px solid #222; color:#222;width:200px;height:45px;margin-top:20px">夏洛特烦恼</button></a>
			<a  href="http://v.youku.com/v_show/id_XOTQyNzk5MzIw.html?from=y1.7-2" target="_blank"><button style="float:right;border: 2px solid #222; color:#222;width:200px;height:45px;margin-top:20px">驴得水</button></a>
			<a  href="http://v.youku.com/v_show/id_XMTI2NTk3MTgwMA==.html?from=y1.7-2" target="_blank"><button style="float:right;border: 2px solid #222; color:#222;width:200px;height:45px;margin-top:20px">切格瓦拉</button></a>
			<a  href="http://v.youku.com/v_show/id_XMTI3NDIyNDE1Mg==.html?from=y1.7-2" target="_blank"><button style="float:right;border: 2px solid #222; color:#222;width:200px;height:45px;margin-top:20px">山楂树之恋</button></a>
			<a  href="http://v.youku.com/v_show/id_XMTM3NTc1MDg1Mg==.html?from=y1.7-2" target="_blank"><button style="float:right;border: 2px solid #222; color:#222;width:200px;height:45px;margin-top:20px">你好，疯子</button></a>
		</div>
	</th>
	<th bgcolor="#222" style="hight:100%">
		
		
		<img src="image/left.png" style="float:right"/>
		
		<button id="past" style="float:right;margin-right:150px;border: 2px solid #aca89a; color: #aca89a;margin-top:180px;" onmouseover="pv()" onmouseout="po()" onclick="pc()">past</button>
		
	</th>
	<th bgcolor="#aca89a" style="hight:100%">
		
		<img src="image/right.png" style="float:left;"/>
		<input type="button" id="next" value="next" style="float:left;margin-left:150px;border: 2px solid #222;color: #222;margin-top:180px"  onmouseover="nv()" onmouseout="no()" onclick="nc()"/>
		
	
	</th>
	<th bgcolor="#222" style="hight:100%">
		<div id="nnext" style="width:0px;float:right">
			<a id="nx" href="next.html" target="_blank"><button style="float:right;border: 2px solid #aca89a; color:#aca89a;width:200px;height:45px" >简介</button></a>
			<a  href="mindex.php" target="_blank"><button style="float:right;border: 2px solid #aca89a; color:#aca89a;width:200px;height:45px;margin-top:100px" href="hindex.php">明向选座</button></a>
			<a  href="hindex.php" target="_blank"><button style="float:right;border: 2px solid #aca89a; color:#aca89a;width:200px;height:45px;margin-top:100px" href="hindex.php">虎屿选座</button></a>
		</div>
	</th>
</table>
<div  class="container" style="float:top;width:100%;background-color:transparent;"></div>

  <script src="js/index.js"></script>

<script>
	
	
	var flag1=false;
	var flag2=false;
	function pv(obj){
		$("#past").animate({margin:'+=4px +=0px',opacity:0.6},150);
		
	}
	function po(){
		$("#past").animate({margin:'-=4px +=0px',opacity:0.9},150);
	}
	function pc(){
		if(!flag2){
		if(!flag1){
			
			$("#ppast").animate({width:'200px'},100);
			$("#past").animate({margin:'-=0 +=150px +=0 +=0'},100);
			
		
	}else{
		$("#ppast").animate({width:'0px'},100);
		$("#past").animate({margin:'-=0 -=150px +=0 +=0'},100);
	}
	flag1=!flag1;
	}else{
		$("#nnext").animate({width:'0px'},100);
		$("#past").animate({margin:'-=0 +=0 +=0 -=150px'},100);
		flag2=!flag2;
	}
	}
	function nv(){
		$("#next").animate({margin:'+=4px +=0px',opacity:0.7},150);
	}
	function no(){
		$("#next").animate({margin:'-=4px +=0px',opacity:0.9},150);
	}
	function nc(){
		if(!flag1){
		if(!flag2){
			
		$("#nnext").animate({width:'200px'},100);
		$("#past").animate({margin:'-=0 -=0 +=0 +=150px'},100);
			
	}else{
		$("#nnext").animate({width:'0px'},100);
		$("#past").animate({margin:'-=0 +=0 +=0 -=150px'},100);
	}
	
	flag2=!flag2;
	}else{
		$("#ppast").animate({width:'0px'},100);
		$("#past").animate({margin:'-=0 -=150px +=0 +=0'},100);
		flag1=!flag1;
	}
	}
	
</script>
</body>
</html>
