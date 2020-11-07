<?php
session_start(); 
if(empty($_SESSION["username"]) ) 
{
header("Location: login.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html>
<body>
<h2> Supplier Home Page</h2>
Hii, <h3> <?php echo $_SESSION["username"];?></h3>

You are Supplier 
<br/><h4>Welcome to your home page.</h4>


<h5>Do you want to go to <a href="pagetwo.php">Check Order</a></h5>

<br/>
 <h5>Do you want to <a href="control/logout.php">logout</a></h5>

</body>
</html>


