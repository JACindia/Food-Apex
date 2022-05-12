<!--?php
   
   $servername= "localhost";
   $username= "root";
   $password = "ajnugodly";
   $db_name = "food_apex";
   $conn = mysqli_connect("localhost","root","ajnugodly","food_apex");
   if (!$conn) {
       echo "Connection failed!";

       session_start(); 

if (isset($_POST['username']) && isset($_POST['passwordsignup'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);

       return $data;

    }
    $username = validate($_POST['username']);
    $passwordsignup = validate($_POST['passwordsignup']);

    if (empty($username)) {
        header("Location: index.php?error=User Name is required");
        exit();
    }else if(empty($passwordsignup)){
        header("Location: index.php?error=Password is required");
        exit();

    }else{
        $sql = "SELECT * FROM sign_up WHERE username='$username' AND passwordsignup='$passwordsignup'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['passwordsignup'] === $passwordsignup) {
                echo "Logged in!";
                $_SESSION['username'] = $row['username'];
  //              $_SESSION['name'] = $row['name'];
//                $_SESSION['id'] = $row['id'];

                header("Location: index.html");

                exit();

            }else{

                header("Location: index.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: index.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: index.php");

    exit();

}
   }
   
   
   /*$servername = "localhost";
   $username = "root";
   $password = "john123";
   $dbname = "ebook_management_system";
   
   $conn = new mysqli("localhost","root","john123","ebook_management_system");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = mysqli_real_escape_string($ebook_management_system,$_POST['username']);
      $passwordsignup = mysqli_real_escape_string($ebook_management_system,$_POST['passwordsignup']); 
      
      $sql = "SELECT username FROM sign_up WHERE username = '$username' and passwordsignup = '$passwordsignup'";
      $sql = "SELECT passwordsignup FROM sign_up WHERE username = '$username' and passwordsignup = '$passwordsignup'";
      
      $result = mysqli_query($ebook_management_system,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
        
      if($count == 1) {
         session_register("username");
         $_SESSION['login_user'] = $username;
         
         header("location: homepg.html");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }*/
?-->








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

$sql = "INSERT INTO sign_up(fullname,email,username,passwordsignup) VALUES('$fullname','$email','$username','$passwordsignup');";


if ($conn -> query($sql) === TRUE) {
  header('Location: login.php');
  exit;
} else {
  echo "Error " . $conn->error;
}
$conn->close();

 ?>
