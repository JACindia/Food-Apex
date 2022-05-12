<?php

$servername = "localhost";
$username = "root";
$password = "ajnugodly";
$dbname = "food_apex";

$conn = new mysqli($servername, $username, $password,$dbname);

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email = $_POST['email'];
    $pword = $_POST['passwordsignup'];
    $sql= "select *  from sign_up where email = '$email'  AND passwordsignup = '$pword' ";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)===1){
        $row = mysqli_fetch_assoc($result);
        header('Location: index.html');
        exit();
    }
    else{
        header('Location: Login.html');
        exit();
    }

}

?>