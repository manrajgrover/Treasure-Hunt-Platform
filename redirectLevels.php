<?php 
session_start();
include 'connection.php';
$connection=connect();
if(isset($_SESSION['emailidfb'],$_SESSION['level'])) // If session isn't set
{
	$sessionemail=$_SESSION['emailidfb'];
	$sessionlevel=$_SESSION['level'];
	$sql="select * from users where emailid='$sessionemail'";
	$check=mysqli_query($connection,$sql);
	$result=mysqli_fetch_array($check);
  if($result['level']!=$sessionlevel) // Should never happen.
    header('Location: index.php');
	if(strpos($_SERVER['REQUEST_URI'],'level'.$sessionlevel.'.php') === false) // If user is trying to go to some other level.
	 header('Location: level.php');
}
else
{
	header('Location: index.php');
}
include 'php/headerlevel.php';
?>