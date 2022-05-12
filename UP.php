

<?php
$servername = "localhost";
$username = "root";
$password = "ajnugodly";
$dbname = "food_apex";

$conn = new mysqli("localhost","root","ajnugodly","food_apex");

$fullname=$_POST["fullname"];
$email=$_POST["email"];
$username=$_POST["username"];
$passwordsignup=$_POST["passwordsignup"];

if(!$conn){
  die("Connection failed : ". mysqli_connect_error());
} 

$sql = "UPDATE sign_up SET fullname='$fullname',username='$username',passwordsignup='$passwordsignup' where email='$email';";


if ($conn -> query($sql) == TRUE) {
  header('Location: account.html');
  exit;
} else {
  echo "Error " . $conn->error;
}
$conn->close();

 ?>