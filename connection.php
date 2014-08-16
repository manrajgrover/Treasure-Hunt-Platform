<?php 
function connect() {
  $connection = mysqli_connect("localhost","colleges","*123456789","colleges_moksha14");
  if(mysqli_connect_errno($connection)) { 
   return false;
  } else {
    return $connection;
  }
}
?>