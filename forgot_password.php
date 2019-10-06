<?php
// Initialize the session
session_start();
 
 $pending = "";
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
    if(empty(trim($_POST["email"]))){
        $username_err = "Please enter email.";
    } else{
        $email = trim($_POST["email"]);
    }
    
    
    // Validate credentials
    if(empty($username_err) ){
        // Prepare a select statement
        $sql = "SELECT  username FROM users WHERE username = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_username);
            
            // Set parameters
            $param_username = $email;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Store result
                $stmt->store_result();
                
                // Check if username exists
                if($stmt->num_rows == 1){

                $token = bin2hex(rand(1000000,9999999));
               $sql = "INSERT INTO password_resets(username, token) VALUES ('$param_username', '$token')"; 
                $results = mysqli_query($mysqli, $sql); 

                $to = $param_username;
                $subject = "Reset your password on Selene NetWorth Calculator";
                $msg = "Hi there, click on this <a href=\"new_password.php?token=" . $token . "\">link</a> to reset your password on our site";
                $msg = wordwrap($msg,70);
                $headers = "From: info@selene.com";
                mail($to, $subject, $msg, $headers);
                $pending = "A password recovery link has been sent to " .$email;           
                   

                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with this email address.";
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

        
        

        <!-- Primary Meta Tags -->
  <title>Team Selene | NetWorth Calculator</title>



        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
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
                    <?php echo "<div class='pending'>".$pending."</div>";?>
        <h2>Password Recovery</h2>
        <?php 
            

            if(isset($_SESSION["success_message"]) == true) {
                echo '<p class="color-green">';
                echo $_SESSION["success_message"]; // Or show the box, or whatever
                echo '</p>';
            }else {
                echo '<p>';
                echo 'Please enter your email to recover your password.';
                echo '</p>' ;
            }
            $_SESSION["success_message"] = null; // Clean up 
            ?>
        <!-- <p>Please fill in your credentials to login.</p> -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">


            <div class="form__group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">  
                <div class="input-container"> 
                    <i class="fa fa-user icon"></i>             
                    <input type="email" name="email" class="form__input"  placeholder="email" require>
                    <label class="form__label">Email</label>
                </div>
                
                <span class="help-block color-red"><?php echo $username_err; ?></span>
            </div>  

            <div class="form__group">
                <input type="submit" class="btn btn--blue" value="Submit">
            </div>
            <!--<p>Don't have an account? <a class="links" href="sign-up.php">Sign up now</a>.</p>-->
        </form>
    </div>    
            </div>
        </section>
        
        <script src="" async defer></script>
    </body>
</html>