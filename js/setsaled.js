//var xmlHttp

function setsaled(setChanged,id,label,rseat)
{ 

xmlHttp=GetXmlHttpObject()
if (xmlHttp==null)
 {
 alert ("Browser does not support HTTP Request")
 return
 }
var url="php/setsaled.php"
url=url+"?id="+id
url=url+"&label="+label
url=url+"&rseat="+rseat
url=url+"&type="+1
url=url+"&sid="+Math.random()
xmlHttp.onreadystatechange=setChanged 
xmlHttp.open("GET",url,true)
xmlHttp.send(null)

}
function GetXmlHttpObject()
{
var xmlHttp=null;
try
 {
 // Firefox, Opera 8.0+, Safari
 xmlHttp=new XMLHttpRequest();
 }
catch (e)
 {
 //Internet Explorer
 try
  {
  xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
  }
 catch (e)
  {
  xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
 }
return xmlHttp;
}