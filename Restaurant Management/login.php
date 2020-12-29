<?php
include('control/logincheck.php');
session_start();

if(isset($_SESSION['username'])){
header("location: pageone.php");
}
?>
<!DOCTYPE html>
<html>
<body style="background-color:gray;">

<head>
<style>
p {
  color: red;
  text-align: center;
} 
</style>
</head>
<body>

<p>Supplier Login</p>
<p>These Login page are styled with CSS.</p>

</body>
</html>

<h2>Login Page</h2>

	<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
	<label for="username">USER NAME</label><br>
    <input type="text" name="username" placeholder="Enter your username" required><br><br>
	<label for="password">PASSWORD</label><br>
    <input type="password" name="password" placeholder="Enter your password" required><br><br>

    <input name="login" type="submit" value="LOGIN">
    <a href="registration.php">Registration</a>
</form>
<br>
<?php echo $error; ?>

</body>
</html>

<?php
if(isset($_POST['login']))
{
	$con=mysqli_connect("localhost","root","","project1");
	if(!$con)
	{
		die("Connection Error: ".mysqli_connect_error()."<br/>");
	}


  //Retrieve Data

	$password=$_POST['password'];
	$username=$_POST['username'];



	$sql="SELECT * FROM supplierinfo WHERE username='$username' AND password='$password'";
	$result=mysqli_query($con,$sql);
	if(mysqli_num_rows($result)>0)
	{
		$row=mysqli_fetch_array($result);
		$_SESSION['username']=$row['username'];
		header("Location:pageone.php");
	}
	else
	{
		echo "Invalid Data.<br/>";
	}



mysqli_close($con);
}
?>
