<html>
<head>
<title>Level 30</title>

<script type="text/javascript">
function checkav(str)
{  
if (str.length==0)
{ 
document.getElementById("txtHint").innerHTML="";
return;
}
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5 

xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("GET","lvl30.php?q="+str,true);
xmlhttp.send();
}
</script>


</head>

<body style="background-image:url('back.png');background-repeat:no-repeat;background-size:cover;">

<div align="center"><img src="enig.jpg" height="30%" width="20%" /></div>

<div align="center">
<h1>%c&mhnsc.msnsqx4m@qp@</h1><br />

<h3>Input here: </h3>
<input type="text" id="hintid" name="hint" onKeyUp="checkav(this.value)" />

<br /><br />
<h3>Output here: </h3>
<span id="txtHint"><strong><em></span>


</div>
</body>
</html>