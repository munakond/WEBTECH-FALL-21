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
Check your Categories
<br/>

<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>



<h1>Check your Categories</h1>

<table style="width:100%">
  <tr>
    <th>Item Name</th>
    <th>Available Items</th> 
    <th> Item Quentity</th>
    
  </tr>
  <tr>
    <td>Rice</td>
    <td>Bashmati,Brown,Jasmine</td>
    <td>Medium about 35kg</td>
   
  </tr>
  <tr>
    <td>Meet</td>
    <td>Beef,Chicken,Goat</td>
    <td>About 20kg</td>
   
  </tr>

  <tr>
    <td>Souce</td>
    <td>Tometo,Chilli,Sour</td>
    <td>About 22bottle</td>
   
  </tr>

  <tr>
    <td>Vegetables</td>
    <td>carrot,cucumber, Potato,Broccoli,Onion-Garlic</td>
    <td>Medium</td>
   
  </tr>
  
</table>


<h4>Do you want to go to your next page <a href="pagethree.php">My Order</a></h4>
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




