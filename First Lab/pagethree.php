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



<h1>Receive Payment</h1>

<table style="width:100%">
  <tr>
    <th>Customer Name</th>
    <th>Payment With Card Or Bikash</th> 
    <th>Cash_Back</th>
    <th>Contact Number</th>
    <th>Food Receipt</th>

  </tr>
  <tr>
    <td>Keya</td>
    <td>Payment With Card</td>
    <td>10% Cash_Back</td>
    <td>01626092131</td>
    <td> Take Receipt</td>
  </tr>
  <tr>
    <td>Taharat</td>
    <td>Payment With Bikash</td>
    <td>No Cash_Back</td>
    <td>01712567231</td>
    <td> Take Receipt</td>
  </tr>
  
</table>

<h5>Do you want to go to <a href="pagefour.php">Order Delivered</a></h5>
<br/>
<a href="control/logout.php">logout</a>

</body>
</html>
