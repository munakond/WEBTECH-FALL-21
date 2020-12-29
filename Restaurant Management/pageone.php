<?php
session_start(); 
if(empty($_SESSION["username"]) ) 
{
header("Location: login.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html>
<body style="background-color:gray;">
<h2> Supplier Home Page</h2>
Hii, <h3> <?php echo $_SESSION["username"];?></h3>

You are Supplier
And You Supplies groceries.
<br/><h4>Welcome to your home page.</h4>


<h4>Do you want to go to your next page<a href="pagetwo.php">Categories(iteam-name)</a></h4>

<br/>
</html>
</body>

<!DOCTYPE html>
<html>
<head>
<style>
/* unvisited link */
a:link {
  color: green;
}

/* visited link */
a:visited {
  color: green;
}

/* mouse over link */
a:hover {
  color: red;
}

/* selected link */
a:active {
  color: yellow;
} 
</style>
</head>
<body>

<p>Mouse over and click the link: <a href="control/logout.php">logout</a></p>

</body>
</html>

 




