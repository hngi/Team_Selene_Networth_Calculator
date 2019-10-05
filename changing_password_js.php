<?php
// Initialize the session
session_start();
require_once "config.php";

 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: sign-in.php");
    exit;
}
 //if (isset($_POST["submit_cp"])) {
    $query =  "SELECT * FROM  users WHERE username = '".$_SESSION["username"]."'";
    $result = mysqli_query($mysqli,$query);
    while($row = mysqli_fetch_array($result)){
        $db_password   = $row["password"]; 
    }
    
    $current_password  = trim($_POST["cp"]);
    $new_password      = trim($_POST["np"]);

    $new_password_hashed     = password_hash($new_password, PASSWORD_DEFAULT);
    $current_password_hashed = password_hash($current_password, PASSWORD_DEFAULT);


   
    // $current_hashed_password = $current_password, PASSWORD_DEFAULT);
    if (!empty($current_password) && !empty($new_password)) {
        if (password_verify($current_password, $db_password)) {
        $query = "UPDATE users SET password = '".$new_password_hashed."' WHERE username = '".$_SESSION["username"]."'";
        if(mysqli_query($mysqli,$query)){
            echo 1;
        }else{
            echo 0;
        }
        }else{
            echo 2;
        }
    }else{
        echo 4;
    }

    

//}
?>
