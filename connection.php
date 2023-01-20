<?php
$servername="localhost";
$username="root";
$password="";
$database="users123";
$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{
  die("Connection failed: ");
}

?>
