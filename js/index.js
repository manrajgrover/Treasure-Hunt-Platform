
function rule()
{
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
document.getElementById("info").innerHTML=xmlhttp.responseText;
document.getElementById("info")="";
}
}
xmlhttp.open("GET","rule.php",true);
xmlhttp.send();
}

function home()
{
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
document.getElementById("info").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("GET","home1.php",true);
xmlhttp.send();
}

function noempty(str)
{
 if(str.pass.value==""){document.getElementById("wron")="password empty"; return false;}   
    
 if(str.use.value==""){document.getElementById("wron")="username empty"; return false;} 
 
 return true;    
}

$(document).ready(function(){
  $("#post1").click(function(){
  $("#postm2").attr('id', 'post2');
  $("#postm3").attr('id', 'post3');
  $(this).attr('id', 'postm1');
  });
});

$(document).ready(function(){
  $("#post2").click(function(){
  $("#postm1").attr('id', 'post1');
  $("#postm3").attr('id', 'post3');
  $(this).attr('id', 'postm2');
  });
});

$(document).ready(function(){
  $("#post3").click(function(){
  $("#postm2").attr('id', 'post2');
  $("#postm1").attr('id', 'post1');
  $(this).attr('id', 'postm3');
  });
});

$(document).ready(function(){
  $(window).load(function(){
  $("#post1").attr('id', 'postm1'); 
  });
});
