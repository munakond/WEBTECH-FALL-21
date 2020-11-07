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



<h1>Check Order</h1>

<table style="width:100%">
  <tr>
    <th>Customer Name</th>
    <th>Order Food Item</th> 
    <th>Food Amount</th>
    <th>Contact Number</th>
  </tr>
  <tr>
    <td>Keya</td>
    <td>Fried Chicken</td>
    <td>2</td>
    <td>01626092290</td>
  </tr>
  <tr>
    <td>Taharat</td>
    <td>Pizza</td>
    <td>2</td>
    <td>01712567245</td>
  </tr>
  
</table>


<h5>Do you want to go to <a href="pagethree.php">Receive Payment</a></h5>
<br/>
<a href="control/logout.php">logout</a>

</body>
</html>