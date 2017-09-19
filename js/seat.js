function getsaled(getChanged)
{ 
xmlHttp=GetXmlHttpObject()
if (xmlHttp==null)
 {
 alert ("Browser does not support HTTP Request")
 return
 }
var url="php/getsaled.php"
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
var url="php/lockseat.php"
url=url+"?label="+label
url=url+"&sid="+Math.random()
xmlHttp.onreadystatechange=lockok 
xmlHttp.open("GET",url,true)
xmlHttp.send(null)

}
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
function unlockseat(label)
{ 

xmlHttp=GetXmlHttpObject()
if (xmlHttp==null)
 {
 alert ("Browser does not support HTTP Request")
 return
 }
var url="php/unlockseat.php"
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