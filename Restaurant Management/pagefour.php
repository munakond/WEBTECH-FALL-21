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
Your Payment Method
<br/>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>



<h1>Payment Method</h1>

<table style="width:100%">
  <tr>
    <th>Owner name</th>
    <th>Vehicle Cost</th> 
    <th>Payment With Card or Bikash</th>
    <th>Cash_Back</th>
    <th>Contact Number</th>
    <th>Receipt</th>

  </tr>
  <tr>
    <td>MD Hasan</td>
    <td>200tk</td>
    <td>Payment with Card</td>
    <td>10% Cash_Back</td>
    <td>01626092102</td>
    <td>Give Receipt</td>
  </tr>
  <tr>
    <td>Abu Sadat</td>
    <td>150tk</td>
     <td>Payment with Card</td>
     <td>No Cash_Back</td>
     <td>01712569921</td>
     <td>Give Receipt</td>
  </tr>
  
</table>
<h5>Do you want to go to <a href="pagefive.php">Order Delivered</a></h5>
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
