<?php
session_start();
if(isset($_SESSION['emailidfb'],$_SESSION['level']))
{
header('Location: level.php');
}
include_once 'php/header.php';
?>

<div id="fb-root" ></div>
<div id="buttonholder" >
<button id="loginButton" style="font-size: 28px;">Login/Register</button>
</div>
<div id="loginPopout" class="hidden">
<div class="alignLeft fullWidth">
<h3>Fill via Facebook</h3>
<fb:login-button data-scope="email,publish_actions" show-faces="true" width="100" max-rows="1" style="position:absolute;right:10px;top:10px;background-color:rgba(2,0,0,0.1);padding:6px;z-index:990000000999;"></fb:login-button>
</div>
<h3>Login</h3>
<div class="alignRight fullWidth" id="response">
Email : <input type="text" id="loginEmail" placeholder="Enter your Email"><br>
Password : <input type="password" id="loginPass" placeholder="Enter your Password"><button onclick="alert('Your Password : \''+$('#loginPass').val()+'\'');">?</button> <br>
<div class="textCenter"><button id="loginDetails">Login</button></div>
</div>
<h3>Register</h3>
<div class="alignRight fullWidth" id="register">
Name : <input type="text" id="reName" placeholder="Enter your Name"> <br>
Email : <input type="text" id="reEmail" placeholder="Enter your Email"><br>
College/School : <input type="text" id="reCollege" placeholder="College"><br>
Contact Number : <input type="text" id="rePhone" placeholder="Phone Number"><br>
Password : <input type="password" id="rePass" placeholder="Choose a Password"> <button onclick="alert('Your Password : \''+$('#rePass').val()+'\'');">?</button>
<div id="captcha"><img class="Captcha"  src="php/create_captcha.php"/>
<input type="text"  placeholder="Enter the word" id="ftCaptcha" style="position:relative;top:-10px;" name="seccode"/>
<button style="position:relative;top:-10px;" onclick="$('.Captcha').attr('src', 'php/create_captcha.php?' + Math.random());">Refresh</button>
</div>
<?php
          //require_once('recaptchalib.php');
          //$publickey = "6LedDPASAAAAAPL5uGZ8LC_c1x_o60hr8qIkR59Y"; // you got this from the signup page
          //echo recaptcha_get_html($publickey);
        ?>
<input type="text" id="reFBLink" class="hidden"> <br>
<div class="textCenter"><button id="submitDetails">Submit</button> <button onclick="$('#loginPopout').addClass('hidden');">Cancel</button></div>
<div class="errorArea hidden textCenter">
</div>
</div>
</div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <script src='js/m.js'></script>
<?php include "php/infocomp.php";?>
</div>
<!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript">
var sc_project=9675822; 
var sc_invisible=1; 
var sc_security="36973d91"; 
var scJsHost = (("https:" == document.location.protocol) ?
"https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" +
scJsHost+
"statcounter.com/counter/counter.js'></"+"script>");
</script>
<noscript><div class="statcounter"><a title="free hit
counters" href="http://statcounter.com/"
target="_blank"><img class="statcounter"
src="http://c.statcounter.com/9675822/0/36973d91/1/"
alt="free hit counters"></a></div></noscript>
<!-- End of StatCounter Code for Default Guide -->
<?php include_once "php/footer.php"; ?>
</body>
</html>