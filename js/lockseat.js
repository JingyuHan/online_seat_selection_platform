//var xmlHttp

function lockseat(lockok,label)
{ 

xmlHttp=GetXmlHttpObject()
if (xmlHttp==null)
 {
 alert ("Browser does not support HTTP Request")
 return
 }
var url="php/lockseat.php"
url=url+"?label="+label
url=url+"&sid="+Math.random()
xmlHttp.onreadystatechange=lockok 
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