<?php
ob_start();
ob_start();

include "checkans2.php";
include_once "dbcn.php";

$ans=$_POST['ans'];

$uid=$_COOKIE['user1'];
  
$query="select attempt from user where ucode='$uid';";
$result=mysql_query($query) or die("could not query");
$row=mysql_fetch_row($result);
$row[0]++;
  
if($ans==$k)
{ 
   
  $query="INSERT INTO `check` (`ucode`, `lvlrank`,`attempt`) VALUES ('$uid', '$q', '$row[0]');";  
  $result=mysql_query($query) or die("could not query");
  
  $q=$q+1;
    
  $query="UPDATE`rank`SET`lvlrank`='$q' WHERE`rank`.`ucode`='$uid';";	
  $result=mysql_query($query) or die("could not query");
  
  $query="UPDATE`user`SET`attempt`='0' WHERE`user`.`ucode`='$uid';";
  $result=mysql_query($query) or die("could not query");

  header("location:playit.php");  
}

else
{
 $query="UPDATE`user`SET`attempt`='$row[0]' WHERE`user`.`ucode`='$uid';";
 $result=mysql_query($query) or die("could not query"); 
 
 header("location:playit.php?l=1");
}



ob_end_flush();
ob_end_flush();

?>