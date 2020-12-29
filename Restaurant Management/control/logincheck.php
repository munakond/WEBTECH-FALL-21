<?php

//session_start(); 

 $error="";

 // store session data
if (isset($_POST['submit'])) {
  if (empty($_POST['username']) || empty($_POST['password']) ||empty($_POST['email']))
   {
    $error = "Username is invalid";
    $error = "Password is invalid";
    $error = "email is invalid";
   }
  else
{
$username=$_POST['username'];
$password=$_POST['password'];
$password=$_POST['email'];



$_SESSION["username"] = $username;
$_SESSION["password"] = $password;
$_SESSION["email"] = $email;



   }
   
 


}



?>
