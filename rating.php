<?php
$servername = "localhost";
$username = "root";
$password = "ajnugodly";
$dbname = "food_apex";
$conn = new mysqli("localhost","root","ajnugodly","food_apex");
$rating=$_POST["rating"];
$rate=$_POST["rate"];
$review=$_POST["review"];
if(!$conn){
  die("Connection failed : ". mysqli_connect_error());
} 
$sql = "INSERT INTO feedback(rating,rate,review) VALUES('$rating','$rate','$review');";
if ($conn -> query($sql) === TRUE) {
  header('Location: home.html');
  exit;
} else {
  echo "Error " . $conn->error;
}
$conn->close();

 ?>