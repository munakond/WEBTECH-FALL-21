<?php
session_start(); 
if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: login.php"); // Redirecting To Home Page
}


?>

<!DOCTYPE html>
<html>
<body>

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
    <th>Customer Name</th>
    <th>Comment</th> 
    <th>Food Review</th>

  </tr>
  <tr>
    <td>Keya</td>
    <td>Food Is Good</td>
    <td>8/10</td>
  </tr>
  <tr>
    <td>Taharat</td>
    <td>Yummy and Tasty</td>
     <td>9.5/10</td>
  </tr>
  
</table>


<br/>
<a href="control/logout.php">logout</a>

</body>
</html>
