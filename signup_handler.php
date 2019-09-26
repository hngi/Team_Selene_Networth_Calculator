<?php
include_once("functions.php");
//if the submit bUttin is clicked
if (isset($_POST["signup"])) {
    $name          = filter_input(INPUT_POST, "fname");
    $email         = filter_input(INPUT_POST,"email");
    $password      = filter_input(INPUT_POST,"password");
    $conf_password = filter_input(INPUT_POST,"conf_password");
    if (user_exists($email)) {
        echo "<script>alert('Email exists');</script>";
    }else if($password!==$conf_password) {
        echo "<script>alert('Password must match');</script>";
    }else{
        if(register_user($name, $email, $password)){
            echo "<script>alert('registered');</script>";
        }else{
            echo "<script>alert('registration failed');</script>";
            }
    }
        
}
?>