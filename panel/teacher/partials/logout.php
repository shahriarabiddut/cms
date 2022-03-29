<?php
    //Include Constants
    include("C:/xampp/htdocs/cms/config/constants.php");
    //1.Destroy the Session
    session_destroy(); 
    //Unsets $_SESSION['user'] = $username;
    //2. Redirect to Login Page
    header('location:'.SITEURL.'login/index.php');
?>