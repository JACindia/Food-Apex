<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="s.css">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Login Form </title>
</head>
<body>
	<div class="container" id="container">
		<div class="form-container log-in-container">
			<form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> method="POST" >
				<h1>Login</h1>
				<input type="email" placeholder="Email" name="email" >
				<input type="password" placeholder="Password" name="passwordsignup" >
				<a href="reset_pass.html">Forgot your password?</a>
				<a href="SignUp.html">Don't have an account? Sign Up Now!</a>
				<button>Log In</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
					<h1>FOOD APEX</h1>
					<p>Your grub hub.</p>
				</div>
			</div>
		</div>
		
	</div>
	
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
        $name= "select username from sign_up where email = '$email'  AND passwordsignup = '$pword' ";
		$username_run=mysqli_query($conn, $name);
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)==1){
		while($row = mysqli_fetch_array($username_run))
        {
			$_SESSION['username']=$row['username'];
		}
		echo "<script> windows.alert(' logged in');</script>";
        header('Location: index.html');

        exit();
    }
    else{
        header('Location: Login.html');
        exit();
    }

}

?>
</body>
</html>