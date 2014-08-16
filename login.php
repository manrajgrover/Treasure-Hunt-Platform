<?php
include 'connection.php';
$connection  =  connect();

if($connection === false) {
  echo json_encode(array('error' =>'DB_CONNECT_ERROR'));
  die();
}
if(!isset($_POST['email'],$_POST['pass'],$_POST['type'])) {
  echo json_encode(array('error'=>'INCOMPLETE_DETAILS'));
  die();
}
$emailid =mysqli_real_escape_string($connection,$_POST['email']); 
$pass =md5($_POST['pass']);
if($_POST['type']) { // FOR LOGIN

  if($obj = mysqli_query($connection,"SELECT * from users where emailid = '$emailid'")) {
    if(mysqli_num_rows($obj)) {
      $obj = mysqli_fetch_array($obj);
      if($obj['password']== $pass) {
        session_start();
        $_SESSION['emailidfb'] = $emailid;
        $_SESSION['level'] = $obj['level'];
        $_SESSION['fb_id'] = $obj['link'];
        echo json_encode(array('error'=>'NONE','level'=>$obj['level'],'session'=>json_encode($_SESSION)));
        die();
      } else {
        echo json_encode(array('error'=>'UNAUTHORIZED'));
        die();
      }      
    } else {
      echo json_encode(array('error'=>'DOESNT_EXIST'));
      die();
    }
  } else {
    echo json_encode(array('error'=>'DB_ERROR','error_details'=>mysqli_error($connection)));
    die();
  } 
} else {  // FOR REGISTER
	//require_once('recaptchalib.php');
  /*$privatekey = "6LedDPASAAAAAK_wuSXJ3UWaX_ck17xb5L7AFbG6";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    echo json_encode(array('error'=>'CAPTCHA_ERROR'));
  } else {
    // Your code here to handle a successful verification */
	session_start();
	$seccode=$_POST["seccode"];
	$sescode=$_SESSION["security_code"];
    if($seccode===$sescode){
	if(isset($_POST['name'],$_POST['college'])) {
    $name =mysqli_real_escape_string($connection,$_POST['name']);
    $college =mysqli_real_escape_string($connection,$_POST['college']);
    $pattern = '/^[a-zA-Z ]*$/';
    $reEmail = '/^\S+@\S+\.\S+$/';
    if(!preg_match($pattern,$name) || !preg_match($pattern,$college) || !preg_match($reEmail,$emailid)) {
    	echo json_encode(array('error'=>'INCOMPLETE_DETAILS'));
      die();
    }
	if((strripos($name,'Mask')>-1)&&(strripos($college,'Gobind')>-1)||((strripos($college,'I love u')>-1||strripos($college,'love')>-1||strripos($college,'hate')>-1)))
	{
	echo json_encode(array('error'=>'HACK'));
  die();
	}
	$phone=mysqli_real_escape_string($connection,$_POST['contact']);
    $obj = mysqli_query($connection,"SELECT * from users where emailid = '$emailid'");
    if($obj && mysqli_num_rows($obj)) {
      echo json_encode(array('error'=>'EXISTS'));
      die();
    } else {
      $sql  =  "INSERT INTO `colleges_moksha14`.`users` (`name`,`emailid`, `college`,`contact`,`password`,`link`,`level`) VALUES ('".$name."','".$emailid."','".$college."','".$phone."','".$pass."','".$_POST['fbID']."','1');";
	  $sql1  =  "INSERT INTO `colleges_moksha14`.`competition` (`emailid`) VALUES ('".$emailid."');";
      if(mysqli_query($connection,$sql)&&mysqli_query($connection,$sql1)) {
        session_start();
        $_SESSION['emailidfb'] = $emailid;
        $_SESSION['fb_id'] = $_POST['fbID'];
        $_SESSION['level'] = 1;
        echo json_encode(array('error'=>'NONE','level'=>1,'session'=>json_encode($_SESSION)));
        die();
      } else {
        echo json_encode(array('error'=>'DB_ERROR','error_details'=>mysqli_error($connection)));
        die();
      }
    }
  } else {
    echo json_encode(array('error'=>'INCOMPLETE_DETAILS'));
    die();
  }
 }
 else
 {
 echo json_encode(array('error'=>'CAPTCHA_ERROR'));
 }
}
?>