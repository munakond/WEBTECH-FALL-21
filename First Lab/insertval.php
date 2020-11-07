<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Munmun";
$conn = new mysqli($servername, $username, $password, $dbname); 
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error); }
$sql = "INSERT INTO Users (firstname, lastname, email) VALUES ('Munmun', 'Akond', 'munakond1@gmail.com')";
$res = $conn->query($sql);//execute query
if($res)
{ echo "new record inserted"; }
else
{ echo "error occurred"; }
$conn->close(); ?>