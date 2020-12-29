  
  <?php
session_start(); 
if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: login.php"); // Redirecting To Home Page
}


?>

<!DOCTYPE html>
<html>
<body style="background-color:gray;">

Hii, <h3> <?php echo $_SESSION["username"];?></h3>
Order Delivered
<br/>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>



<h1>Order Delivered</h1>

<table style="width:100%">
<tr>
    <th> Buyer Name</th>
    <th>Comment</th> 
    <th> Item Review</th>
    
  </tr>
  <tr>
    <td>MD Hasan</td>
    <td>Meet is Fresh</td>
    <td>8/10</td>
   
  </tr>
  <tr>
    <td>Abu Sadat</td>
    <td>Comparing with price items are satisfying</td>
    <td>9.4/10</td>

  
  
</table>
<br/>


</body>
</html>

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

  
  
  