<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup</title>
    <link rel="stylesheet" href="signup-style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <div class="background">
            <div class="text">
                <h1>Signup</h1>
                <p>Have Account? <a href="login.php">Login</a></p>
            </div>
            <div class="box">
                <div class="form">
                <form action="index.php" method="post" autocomplete="on">
                    <input type="text" name="fullname" class="fullname" placeholder="Full Name" required>
                    <input type="email" name="email" class="email" placeholder="someone@abc.com" required>
                    <input type="text" name="username" class="username" placeholder="Username" required>
                    <input type="password" name="passwordsignup" class="passwordsignup" placeholder="Password" required>
                    <br>
                    <input type="submit" class="button" value="Login">
                </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>