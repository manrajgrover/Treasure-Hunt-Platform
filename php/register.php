<?php
ob_start();
ob_start();

?>

<html>
<head>
<title>Loading...</title>
</head>

<body>
<?php

$fname=$_POST['name'];
$email=$_POST['id1'];
$uname=$_POST['user1'];
$pass=$_POST['pass'];
$phone=$_POST['phno'];
$coll=$_POST['address'];

require_once "dbcn.php";

if($uname==""){ header("location:index.php");
}

else{
$query="INSERT INTO`user` (
 `username` ,
 `password` ,
 `name` ,
 `college` ,
 `phone` ,
 `email` ,
 `attempt` 
)
VALUES (
'$uname','$pass','$fname','$coll','$phone','$email','0'
);
";

$result=mysql_query($query) or header("location:index.php"); 

$query="select uid from user where username='$uname';";
$result=mysql_query($query) or header("location:index.php"); 
$row=mysql_fetch_row($result)or header("location:index.php");

$code=md5($row[0]);

$query="UPDATE`user`SET`ucode`='$code' WHERE`user`.`uid`=$row[0];";
$result=mysql_query($query) or header("location:index.php"); 

$query="INSERT INTO `rank` (`ucode`) VALUES ('$code');
";

$result=mysql_query($query) or header("location:index.php");

if(!$result)
echo"could not operate";

$error=mysql_error();

echo $error;

header("location:index.php?l=3");
}
?>



</body>
</html>

<?php
ob_end_flush();
ob_end_flush();
?>