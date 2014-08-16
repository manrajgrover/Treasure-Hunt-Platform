<?php
session_start();
if(isset($_SESSION['emailidfb'],$_SESSION['level']))
{
  // if(($_SESSION['level'] > 19)) {
    // header('Location: leader.php?w=1');
    // die();
  // }
	header('Location: level'.$_SESSION['level'].'.php');
}
else
{
	header('Location: index.php');
}
?>