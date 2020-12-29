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
Your Order List
<br/>

<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>



<h1>Order List</h1>

<table style="width:100%">
  <tr>
    <th>Restaurant Name</th>
    <th>Manager Name</th> 
    <th>Restaurant Location</th>
    <th>Contact Number</th>
    <th>Iteam List</th>

  </tr>
  <tr>
    <td>Pizza End</td>
    <td>Abu Sadat</td>
    <td>Uttara,BNS Market</td>
    <td>01626092131</td>
    <td> Bashmati rice(3kg),Onion-garlic(10kg),Beef(5kg)</td>
  </tr>
  <tr>
    <td>Rice&Nuddles</td>
    <td>Md Hasidul</td>
    <td>Sector-12,Uttara</td>
    <td>01712569921</td>
    <td>Brown rice(3kg),Bashmati(5kg),Chicken(8kg),Carrot(2kg),Broccoli(2kg)</td>
  </tr>
  
</table>

<h5>Do you want to go to <a href="pagefour.php">Payment Method</a></h5>
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
