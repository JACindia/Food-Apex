<?php

$servername = "localhost";
$username = "root";
$password = "ajnugodly";
$dbname = "food_apex";
$conn = new mysqli($servername, $username, $password,$dbname);
mysqli_select_db($conn, $dbname);

?>