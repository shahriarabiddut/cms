<?php
    //Session Starts
    session_start();
    //Session 
    //Create Constants to Store Non Repeating Values
    // Constants are named in CAPITAL LETTERS & variables are named in lowercase letter
    // Constants Give Proffesional Look & easy to change anything.Best Practise
    define('LOCALHOST','localhost');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','');
    define('DB_NAME','cms');
    //Constant for Home url or SITE url
    define('SITEURL','http://localhost/CMS/');
    
    // Database Connection
    $conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error());
    // Need to Select database , This Code selects database
    $db_select = mysqli_select_db($conn ,DB_NAME) or die(mysqli_error());
    
?>