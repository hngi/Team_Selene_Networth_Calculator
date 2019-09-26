<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="sign-in.css">
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
            <form action="#" method="POST">
                <h2>Sign up</h2>
                <input type="text" name="name" placeholder="Enter Name">
                <input type="text" name="username" placeholder="Enter Username">
                <input type="email"  name="email"  placeholder="Enter Email">
                <input type="password" name="password" placeholder="Enter Password">
                <input type="password" name="confirmPassword" placeholder="Confirm Password">
                <input type="submit" value="Sign up">
                <hr class="hr">
                <p>Have an account? <a href="sign-in.php">Sign in</a></p>
            </form>
            
        </div>
    </div>
</body>
</html>


