<?php
include('control/logincheck.php');
session_start();

if(isset($_SESSION['username'])){
header("location: pageone.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<body>
<?php
include('control/logincheck.php');
$username = $name =$email=$password=$confirmpassword=$address=$phone=$type=$gender=$dateofbirth=" ";
 $usernameerror="";
 $nameerror="";
 $emailerror="";
 $passworderror="";
 $confirmpassworderror="";
 $addresserror="";
 $phoneerror="";
 $typeerror="";
 $gendererror="";
 $doberror="";
 if(isset($_REQUEST['submit'])){

  if (empty($_POST['username'])){
    $usernameerror = "please insert correct username";
    }
    else{
       
       
       $username=$_POST['username'];
      
    }
    if (empty($_POST['name'])){
        $nameerror = "please insert correct name";
        }
        else{
            $name=$_POST['name'];
        }
        if (empty($_POST['email'])){
            $emailerror = "please insert correct email";
            }
            else{
                $email=$_POST['email'];
            }
            if (empty($_POST['password'])){
                $passworderror = "please insert correct password";
                }
                else{
                    $password=$_POST['password'];
                }
                if (empty($_POST['confirmpassword'])){
                    $confirmpassworderror = "please insert correct cp";
                    }
                    else{
                        $confirmpassword=$_POST['confirmpassword'];
                    }
                    if (empty($_POST['address'])){
                        $addresserror = "please insert correct address";
                        }
                        else{
                            $address=$_POST['address'];
                        }
                        if (empty($_POST['phone'])){
                            $phoneerror = "please insert correct phone number";
                            }
                            else{
                                $phone=$_POST['phone'];
                            }
                            if (empty($_POST['type'])){
                                $typeerror = "please select a type";
                                }
                                else{
                                    $type=$_POST['type'];
                                }
                                if (empty($_POST['gender'])){
                                    $gendererror = "please select your gender";
                                    }
                                    else{
                                        $gender=$_POST['gender'];
                                    }
                                    if (empty($_POST['dateofbirth'])){
                                        $doberror = "please insert your DOB";
                                        }
                                        else{
                                            $dateofbirth=$_POST['dateofbirth'];
                                        }
                                    }
                                      
 if ((!empty($_POST['username'])) && (!empty($_POST['name']))&&(!empty($_POST['email']))&&(!empty($_POST['password']))&&(!empty($_POST['confirmpassword']))&&(!empty($_POST['address']))&&(!empty($_POST['phone']))&&(!empty($_POST['type']))&&(!empty($_POST['gender']))&&(!empty($_POST['dateofbirth'])))

//if($password==$cpassword)
	{
	$con=mysqli_connect("localhost","root","","project1");
	if(!$con)
	{
		die("Connection Error: ".mysqli_connect_error()."<br/>");
	}
	//Row Insert

	$sql="INSERT INTO `supplierinfo`(`username`, `email`, `password`, `address`, `phone`, `type`, `gender`, `dateofbirth`) VALUES('$username','$email','$password','$address','$phone','$type','$gender','$dateofbirth')";
	if(mysqli_query($con,$sql))
	{
		header("Location:login.php");
	}
	else
	{
		echo "Error in inserting: ".mysqli_error($con);
	}


    mysqli_close($con);
    }
    ?>



<h2 style="text-align:left;">Register Here</h2><br>
<body style="background-color:green;">

<form action="" method= "post">  
    <label for="username">USER NAME</label><br>
    <input type="text" name="username" id="username"><?php echo $usernameerror ?>
    <br>
    <br>
    <label for="name">NAME</label><br>
    <input type="text" name="name" id="name"><?php echo $nameerror ?>
    <br>
    <br>
    <label for="email">EMAIL</label><br>
    <input type="text" name="email" id="email"><?php echo $emailerror ?>
    <br>
    <br>
    <label for="password">PASSWORD</label><br>
    <input type="text" name="password" id="password"><?php echo $passworderror ?>
    <br>
    <br>
    <label for="confirmpassword">CONFIRM PASSWORD</label><br>
    <input type="text" name="confirmpassword" id="confirmpassword"><?php echo $confirmpassworderror ?>
    <br>
    <br>
    <label for="address">ADDRESS</label><br>
    <input type="text" name="address" id="address" style="height:80px;width:200px"><?php echo $addresserror ?>
    <br>
    <br>
    <label for="phone">PHONE</label><br>
    <input type="text" name="phone" id="phone"><?php echo $phoneerror ?>
    <br>
    <br>   
    <label for="type">Type</label><br>
    <select name=type id="type"><option value="chooseHere">Choose here<option value="seller">Seller<option value="buyer">Buyer<option value="deliveryMan">Delivery man</option></select><?php echo $typeerror;?>
    <br>
    <br>
    <label for="gender">Gender</label><br>
    <input type="radio" name="gender" id="gender" value="Male">Male<input type="radio" name="gender" value="Female">Female<input type="radio" name="gender" value="Other">Other<br><?php echo $gendererror;?>
    <br>
    <br>
    <label for="dateofbirth">Date Of Birth</label><br>
    <input type="date" id="dateofbirth" name="dateofbirth" min="1900-12-31"><?php echo $doberror?>   
    <br>
    <br>  
    
    <input type="submit" name="submit" value="Register" style="background-color:grey; height: 30px; width: 70px; margin-left:0%; margin-right:0% ;display:block;margin-top:0%;margin-bottom:0%"> 
    </form>
    <br>
    
    <a href="loginhome.php" style="color:yellow;">BACK</a>
    
  
    



        
  
  
    
</body>
</html>
