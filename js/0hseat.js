function getsaled(getChanged)
{ 
xmlHttp=GetXmlHttpObject()
if (xmlHttp==null)
 {
 alert ("Browser does not support HTTP Request")
 return
 }
var url="php/0hgetsaled.php"
xmlHttp.onreadystatechange=getChanged 
xmlHttp.open("GET",url,true)
xmlHttp.send(null)

}
function lockseat(lockok,label)
{ 

xmlHttp=GetXmlHttpObject()
if (xmlHttp==null)
 {
 alert ("Browser does not support HTTP Request")
 return
 }
var url="php/0hlockseat.php"
url=url+"?label="+label
url=url+"&sid="+Math.random()
xmlHttp.onreadystatechange=lockok 
xmlHttp.open("GET",url,true)
xmlHttp.send(null)

}
function setsaled(setChanged,id,label,rseat,tel)
{ 

xmlHttp=GetXmlHttpObject()
if (xmlHttp==null)
 {
 alert ("Browser does not support HTTP Request")
 return
 }
var url="php/0hsetsaled.php"
url=url+"?id="+id
url=url+"&label="+label
url=url+"&rseat="+rseat
url=url+"&tel="+tel
url=url+"&sid="+Math.random()
xmlHttp.onreadystatechange=setChanged 
xmlHttp.open("GET",url,true)
xmlHttp.send(null)

}
function unlockseat(label)
{ 

xmlHttp=GetXmlHttpObject()
if (xmlHttp==null)
 {
 alert ("Browser does not support HTTP Request")
 return
 }
var url="php/0hunlockseat.php"
url=url+"?label="+label
url=url+"&sid="+Math.random()
xmlHttp.open("GET",url,true)
xmlHttp.send(null)

}
function GetXmlHttpObject()
{
var xmlHttp=null;
try
 {
xmlHttp=new XMLHttpRequest();
 }
catch (e)
 {
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