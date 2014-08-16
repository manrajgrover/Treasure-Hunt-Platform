<?php

$q=$_GET["q"];

require_once "dbcn.php";

$query="select* from user where username='$q';";
$result=mysql_query($query) or die("wrongly entered1");
$row=mysql_fetch_row($result);

if($row)
{ echo "this username exists";   

}

else{ echo "this username is available";}

?>