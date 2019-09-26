<?php
    include_once("login_handler.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/sign-in.css">
    <link rel="stylesheet" href="font.css">
    <title>Sign in page</title>
</head>
<body>
    <div class="wrap">
        <div class="nav">
            <div class="logo"> 
                <a href="index.php">Selene</a>
            </div>
        </div> <!--end of nav div-->

        <div class="signup">
            <form method="POST">
                <h2>Sign in</h2>
                
                <input type="email"  name="email"  placeholder="Enter Email" required>
                <input type="password" name="password" placeholder="Enter Password" required>
                <input type="submit" value="Sign in" id="login-btn" name="login" class="btn btn-info">
                <hr class="hr">
                <p>Don't have an account? <a href="sign-up.php">Sign up</a></p>
            </form>
            
        </div>
    </div>
</body>
</html>


