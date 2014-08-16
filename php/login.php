<?php

ob_start();
ob_start();

session_start();
echo "<h1>Loading...</h1>";

$uname=$_POST['use'];
$pass=$_POST['pass'];

include_once("dbcn.php");

$qry="SELECT *
FROM `user`
WHERE `username` = '$uname'
AND `password` = '$pass'";
$rs=mysql_query($qry)or header("location:../index.php");

	if($row=mysql_fetch_row($rs))
	{   
		$uid=$row[8];
		$_SESSION['user']=$uid;
		setcookie("user1",$uid);
		header('location: playit.php');					
	}
	
	else
	{   
		header('location: index.php?l=2');
	}
ob_end_flush();
ob_end_flush();
?>
