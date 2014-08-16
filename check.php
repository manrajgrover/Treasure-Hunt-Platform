<?php 
session_start();
include 'connection.php';
$connection=connect();
if(!isset($_SESSION['emailidfb'],$_SESSION['level'])){
header('Location: index.php');
}
if(!isset($_POST['answer'])) {
  header('Location: index.php');
  die();
}
$postans=mysqli_real_escape_string($connection,$_POST['answer']);
$level=$_SESSION['level'];
$cookieemail=$_SESSION['emailidfb'];
switch($level)
{
	case 0:
	$ans='leavethisq';
	break;
	case 1:
	$ans='anglee';
	break;
	case 2:
	$ans='gangsareatmoksha';
	break;
	case 3:
	$ans='bell430';
	break;
	case 4:
	$ans='lisakudrow';
	break;
	case 5:
	$ans='euglossabazinga';
	break;
	case 6:
	$ans='alfredbernhardnobel';
	break;
	case 7:
	$ans='alcapone';
	break;
	case 8:
	$ans='jaguar';
	break;
	case 9:
	$ans='satya';
	break;
	case 10:
	$ans='karllykos';
	break;
	case 11:
	$ans='baddingtonbear';
	break;
	case 12:
	$ans='unix';
	break;
	case 13:
	$ans='tigertokill';
	break;
	case 14:
	$ans='christamcauliffe';
	break;
	case 15:
	$ans='anwar';
	break;
	case 16:
	$ans='easterbilby';
	break;
	case 17:
	$ans='arseniypetrovychyatsenyuk';
	break;
	case 18:
	$ans='nationalassociationforstockcarautoracing';
	break;
	case 19:
	$ans='makkahalmukarramah';
	break;
	case 20:
	$ans='youhaveattainedmoksha';
	break;
	case 21:
	$ans='lawoman';
	break;
	case 22:
	$ans='icica';
	break;
	case 23:
	$ans='strand1';
	break;
	case 24:
	$ans='ussarizona';
	break;
	case 25:
	$ans='itisover';
	break;
	case 26:
	$ans='quora';
	break;
}
if($ans==$postans)
{
	$prev=$level;
	$level++;
	$connection=connect();
	$sql="SELECT * from competition where emailid='$cookieemail'";
	$query=mysqli_query($connection,$sql);
	//if(!$query) echo 'Error : '.mysqli_errno($connection).' - '.mysqli_error($connection);
	$result=mysqli_fetch_array($query);
	$result["level".$prev."attempts"]++;
	$att=$result["level".$prev."attempts"];
	$levelans=$result["level".$prev."answers"];
	$joinedans=$levelans.','.$postans;
	$time=time();
	//echo $prev,$level,$result,$joinedans,$time,$att;
	$update="UPDATE  users SET level='".$level."' ,timestamp='".$time."' WHERE emailid='".$cookieemail."'";
	$updateans="UPDATE competition SET level".$prev."attempts='".$att."' ,level".$prev."answers='".$joinedans."' WHERE emailid='".$cookieemail."'";
	if(mysqli_query($connection,$update))
	{
		if(mysqli_query($connection,$updateans))
		{
			$_SESSION['level']++;
			header('Location: share.php');
		}
	}
	else
	{
		echo "We are facing some technical difficulties";	
	}
}
else
{
	$prev=$level;
	$connection=connect();
	$sql="SELECT * from competition where emailid='$cookieemail'";
	$query=mysqli_query($connection,$sql);
	//if(!$query) echo 'Error : '.mysqli_errno($connection).' - '.mysqli_error($connection);
	$result=mysqli_fetch_array($query);
	$result["level".$prev."attempts"]++;
	$att=$result["level".$prev."attempts"];
	$levelans=$result["level".$prev."answers"];
	$joinedans=$levelans.','.$postans;
  $joinedans = htmlspecialchars(mysqli_real_escape_string($connection,$joinedans));
	$time=time();
	//echo $prev,$level,$result,$joinedans,$time,$att;
	$update="UPDATE  users SET level='".$level."' WHERE emailid='".$cookieemail."'";
	$updateans="UPDATE competition SET level".$prev."attempts='".$att."',level".$prev."answers='".$joinedans."' WHERE emailid='".$cookieemail."'";
	//echo $update,$updateans;
	if(mysqli_query($connection,$update)&&mysqli_query($connection,$updateans)){
	header('Location: level.php');
	}
	else
	{
		echo "We are facing some technical difficulties in checking. <hr> Report to <a href='http://nsit-moksha.com/vimukti/team.php'>developers<a> : ".mysqli_error($connection).'<br> Common Causes of Errors : 1) You are using special characters. 2) You are a hacker.';	
	}
}
?>