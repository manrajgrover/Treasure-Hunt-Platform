<?php

ob_start();
ob_start();

header("Cache-Control:private","no-cache");
session_start();
unset($_SESSION['user']);
session_unset();
session_destroy();

setcookie("user1",'',1);

header('location:index.php');

ob_end_flush();
ob_end_flush();

?>