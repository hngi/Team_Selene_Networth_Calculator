<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: dashboard.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Store result
                $stmt->store_result();
                
                // Check if username exists, if yes then verify password
                if($stmt->num_rows == 1){                    
                    // Bind result variables
                    $stmt->bind_result($id, $username, $hashed_password);
                    if($stmt->fetch()){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: dashboard.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
            // Close statement
        $stmt->close();
        }
        
        
    }
    
    // Close connection
    $mysqli->close();
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <meta name="google-signin-client_id" content="221376369157-vebshenbgripi8037e97m7nfnmr57cee.apps.googleusercontent.com">
        

        
        

        <!-- Primary Meta Tags -->
  <title>Selene NetChecker - Login</title>



        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <!-- <script src="https://apis.google.com/js/platform.js" async defer></script> -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
        
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <section class="container">
            <div class="heading-primary">
                <h1>NetWorth <br />Calculator</h1>
            </div>
            <div class="login__container">
                <div class="wrapper">
        <h2>Login</h2>
        <?php 
            

            if(isset($_SESSION["success_message"]) == true) {
                echo '<p class="color-green">';
                echo $_SESSION["success_message"]; // Or show the box, or whatever
                echo '</p>';
            }else {
                echo '<p>';
                echo 'Please fill in your credentials to login.';
                echo '</p>' ;
            }
            $_SESSION["success_message"] = null; // Clean up 
            ?>
        <!-- <p>Please fill in your credentials to login.</p> -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">


            <div class="form__group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">  
                <div class="input-container"> 
                    <i class="fa fa-user icon"></i>             
                    <input type="email" name="username" class="form__input" value="<?php echo $username; ?>" placeholder="email" require>
                    <label class="form__label"></label>
                </div>
                
                <span class="help-block color-red"><?php echo $username_err; ?></span>
            </div>  

            <div class="form__group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>"> 
                <div class="input-container"> 
                    <i class="fa fa-key icon"></i>               
                    <input type="password" name="password" class="form__input" placeholder="password">
                    <label class="form__label"></label>
                </div>
                
                <span class="help-block color-red"><?php echo $password_err; ?></span>
            </div>
            <div class="form__group">
                <input type="submit" class="btn btn--blue" value="Login">
            </div>
            <p>Don't have an account? <a class="links" href="sign-up.php">Sign up now</a>.</p>

        <div>
            <table class="snp"><tr>
				<td style="border-bottom: 2px solid #009688; width: 47%">&nbsp;</td>
				<td style="vertical-align:middle;text-align:center;" rowspan="2">or</td>
				<td style="border-bottom: 2px solid #009688; width: 47%">&nbsp;</td>
            </tr></table>
            
            <div id="my-signin2" class="gSignInWrapper"></div>

        </div>

        </form>
    </div>    
            </div>
        </section>
        <script src="js/util/index.js"></script>
        <script src="js/storage.localstorage.js"></script>
        <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
        <script src="js/google_auth.js"></script>
        
    </body>
</html>