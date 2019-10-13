<?php

 $con = mysqli_connect('127.0.0.1','root','');

 if(!$con)
 {
  echo 'Not Connected To Server';
 }

 if (!mysqli_select_db($con,'registration'))
 {
  echo 'Database Not Selected';
 }

 $user_name = $_POST['usr'];
 $user_email = $_POST['mail'];
$user_password = $_POST['pass'];


 $sql = "INSERT INTO student_reg (user_name,user_email,user_password) VALUES ('$user_name','$user_email','$user_password')";

 if(!mysqli_query($con,$sql))
 {
  echo 'Not Inserted';
 }
 else
 {
  echo 'Inserted';
 }

 header("refresh:2; url=index.php");

?>
