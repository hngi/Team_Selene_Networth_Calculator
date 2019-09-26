<?php
include_once("functions.php");
//if the login button is clicked
if (isset($_POST["login"])) {
    $email         = filter_input(INPUT_POST,"email");
    $password      = filter_input(INPUT_POST,"password");

    if(login($email, $password)){
        header("Location: dashboard.php");
    }else{
        echo "<script>alert('failed login: enter correct email/password');</script>";
    }
}
?>