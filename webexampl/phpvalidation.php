<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";
$nameError="";
$emailError="";
$websiteError="";
$commentError="";
$genderError="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
  if(empty($name)|| $name=="" )
  {
      $nameError="Please Enter your name";
  }

  if(empty($email)|| $email=="")
  {
      $emailError="Please Enter your email";
  }

  if(empty($website)|| $website=="")
  {
      $websiteError="Please Enter your website";
  }

  if(empty($comment)|| $comment=="")
  {
      $commentError="Please Enter your comment";
  }

  if(empty($gender)|| $gender=="")
  {
      $genderError="Please Enter your gender";
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name"> <?php echo $nameError; ?>
  <br><br>
  E-mail: <input type="text" name="email"> <?php echo $emailError; ?>
  <br><br>
  Website: <input type="text" name="website"> <?php echo $websiteError; ?>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea> <?php echo $commentError; ?>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female"  cheacked>  Female 
  <input type="radio" name="gender" value="male">  Male 
  <input type="radio" name="gender" value="other">Other 
  <br>
  <?php echo $genderError; ?>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>