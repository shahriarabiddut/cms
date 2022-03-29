<?php 
        //Authorization or Access Control
        //Check whether the user is logged in or not 
        if(!isset($_SESSION['user']))
        //if user session is not set 
        {
            //User is not logged in and redirect with message
            $_SESSION['no-login-message'] = "<div class='btn-danger text-center'> Please login to Access Control</div>";
            //Redirect
            header('location:'.SITEURL.'login/index.php');
            die();
        }
        if(!$_SESSION['userType'] == "staff")
        //if user session is not set 
        {
            //User is not logged in and redirect with message
            $_SESSION['no-login-message'] = "<div class='btn-danger text-center'> You are not a Staff</div>";
            //Redirect
            header('location:'.SITEURL.'login/index.php');
            die();
        }
            ?>