<?php
			$urls = array(
    'http://www.eerbabao.top/index.php',
);
$api = 'http://data.zz.baidu.com/urls?site=www.eerbabao.top&token=RfNbBkR8BVkZPxk2&type=original';
$ch = curl_init();
$options =  array(
    CURLOPT_URL => $api,
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => implode("\n", $urls),
    CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
);
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
echo $result;
			?>
            
<script type="text/javascript">
(function(){
var p = {
url:location.href,
showcount:'1',/*是否显示分享总数,显示：'1'，不显示：'0' */
desc:'',/*默认分享理由(可选)*/
summary:'',/*分享摘要(可选)*/
title:'',/*分享标题(可选)*/
site:'',/*分享来源 如：腾讯网(可选)*/
pics:'', /*分享图片的路径(可选)*/
style:'101',
width:199,
height:30
};
var s = [];
for(var i in p){
s.push(i + '=' + encodeURIComponent(p[i]||''));
}
document.write(['<a version="1.0" class="qzOpenerDiv" href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?',s.join('&'),'" target="_blank">分享</a>'].join(''));
})();
</script>
<script src="http://qzonestyle.gtimg.cn/qzone/app/qzlike/qzopensl.js#jsdate=20111201" charset="utf-8"></script>


<span id="qqLoginBtn" style="float:top"></span>

<script type="text/javascript" src="http://qzonestyle.gtimg.cn/qzone/openapi/qc_loader.js" data-appid="101275330"charset="utf-8"></script>
<script type="text/javascript">
var cbLoginFun = function(oInfo, oOpts){
	if(QC.Login.check()){
		QC.Login.getMe(function(openId,accessToken){
			console.log(openId);
			console.log(accessToken);
		});
	}
    console.log(oInfo);
};
    QC.Login({
       btnId:"qqLoginBtn"    //插入按钮的节点id
},cbLoginFun);

</script>