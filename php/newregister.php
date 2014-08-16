<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Bodmas: registration page</title>

<!--<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="http://jzaefferer.github.com/jquery-validation/jquery.validate.js"></script>
-->

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.validate.js"></script>

<style type="text/css">

* { font-family: Verdana; font-size: 96%; }
label.error { float: none; color: yellow; padding-left: .5em; vertical-align: top; }

</style>

<script>
  $(document).ready(function(){    
	$("#mainform").validate();
  });
</script>

<script type="text/javascript">

function checkav(str)
{
 document.getElementById("e").innerHTML="";
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
xmlhttp.open("GET","check.php?q="+str,true);
xmlhttp.send();
}

function noempty(str){

 if(document.getElementById("txtHint").innerHTML=="this username exists")
 {
	 alert("this username is used by other user. Please select a different one");
	 return false;
 }
        			  
  else
  {
	if(str.pass.value!=str.cpass.value){ alert("password does not match"); return false;} 
  }

}

</script>
  
</head>

<body style="background-image: url(bodmas.jpg); background-size:100%;"> 

<div align="center">
<img src="Blurred.jpg" height="25%" width="18%">
<a href="index.php" style="float:right;"><h1>HOME</h1></a>
</div>

<div align="center" style="color:#FFF;">
<h1 style="text-align:center;color:#FFF;">REGISTRATION FORM</h1>
 <form class="cmxform" id="mainform" method="post" action="register.php" onSubmit="return noempty(this)">
  <table border="0" style="color:#FFF;">
      <tr>
          <td>Name <font color="#FF0000">*</font></td>
          <td style="padding-left:20px;"><input type="text" id="cname" name="name" class="required" minlength="2" /><br/><br/></td>         
      </tr>
      <tr>
          <td>Username <font color="#FF0000">*</font></td>
          <td style="padding-left:20px;"><input type="text" id="uname" name="user1" class="required" minlength="2" maxlength="50" onKeyUp="checkav(this.value)" /><br/><br/></td>
          <td style="padding-left:20px; color:yellow;"><span id="e"></span><span id="txtHint"></span><br/><br /></td>              
      </tr>
      <tr>
          <td>Password <font color="#FF0000">*</font></td>
          <td style="padding-left:20px;"><input type="password" id="password" name="pass" class="required" minlength="2" maxlength="50" /><br/><br/></td>
      </tr>
      <tr>
          <td>Confirm Password <font color="#FF0000">*</font></td>
          <td style="padding-left:20px;"><input type="password" id="cpassword" name="cpass" class="required" minlength="2" maxlength="50" /><br/><br/></td>
      </tr>
      <tr>
          <td>Email Id <font color="#FF0000">*</font></td>
          <td style="padding-left:20px;"><input type="text" id="eid" name="id1" class="required email" minlength="2" /><br/><br/></td>
      </tr>
      <tr>
          <td>College <font color="#FF0000">*</font></td>
          <td style="padding-left:20px;"><input type="textarea" id="college" name="address"  class="required" minlength="2" /><br/><br/></td>
      </tr>
      <tr>
          <td>Phone no <font color="#FF0000">*</font></td>
          <td style="padding-left:20px;"><input type="text" id="phono" name="phno"  class="required number" minlength="2" maxlength="15" /><br/><br/></td>
      </tr>
   </table>    
   <p>field marked with (<font color="#FF0000">*</font>) are cumpolsary</p>   
   
   <input class="submit" type="submit" value="Submit"/> 
 </form>
 
</div> 
</body>
</html>