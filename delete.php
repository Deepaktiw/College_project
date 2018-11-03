<?php
include ('connection.php');
session_start();
$f_id=$_SESSION['user1'];
$del=$_GET['id'];
$sql="delete from career where  f_id='$f_id'";
if(mysqli_query($conn,$sql))
header("refresh:0.5; url=facultyzone.php");
else
{
  echo"NOt deleted";
}
 ?>
