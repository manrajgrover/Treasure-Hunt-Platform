<?php
 include_once 'fbsdk/facebook.php';
 session_start();
 $appId = ''; //Add App ID
 $secret = ''; // Add App secret
 $returnurl = ''; //Add share URL
 $permissions = 'publish_stream';
 $fb = new Facebook(array('appId'=>$appId, 'secret'=>$secret));
 

 $fbuser = $fb->getUser();
 
 if($fbuser){
  if(isset($_SESSION['level'])) {
    try{
        $message = array(
            'message' => 'I just cleared level '.($_SESSION['level']-1).' on Vimukti , Moksha 2014 , NSIT', 
            'link' => 'http://nsit-moksha.com/vimukti/',
            'icon' => 'http://nsit-moksha.com/images/logomok.jpg',
            'picture' => 'http://nsit-moksha.com/images/logomok.jpg',
            'caption' => 'Vimukti ,Moksha  2014',
            'description' => 'VIMUKTI consists of various levels of varying difficulty. You are supposed to solve each level step by step and proceed to next level for which you need answer for the current level. The participant who finishes the game earliest or who reaches up to the highest level till the game is closed, will be declared as winner.'
        );
        $posturl = '/'.$_SESSION['fb_id'].'/feed';
        $result = $fb->api($posturl,'POST',$message);
        if($result){
          header('Location: level.php');
          die();
        }
    }catch(FacebookApiException $e){
        header('Location: level.php');
        die();
    }
  }
 }else{
    header('Location: level.php');
    die();
 }
 header('Location: level.php');
 die();
?>