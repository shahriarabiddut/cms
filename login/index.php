<?php include('../config/constants.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login > Smart ClassRoom</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="login">
        <h1 class="text-center">Login</h1>
        <br>
        <?php 
        if(isset($_SESSION['login']))
        {
            echo $_SESSION['login'];
            unset($_SESSION['login']);
        }
        if(isset($_SESSION['no-login-message']))
        {
            echo $_SESSION['no-login-message'];
            unset($_SESSION['no-login-message']);
        }
         ?> <br>
        <!-- Login Form Starts here -->
        <form action="" method="post">
            <table class="midtable">
                <tr>
                    <td>
                    Username :  <br>
                    <input type="text" name="username" placeholder="Enter Username" required>
                    </td>
                </tr>
                <tr>
                    <td>
                    Password : 
                    <br>
                    <input type="password" name="password" placeholder="Enter Password" required>
                    </td>
                </tr>
                <tr><td>
                        <input type="submit" name="submit" value="Login" class="btn-primary">
                    </td></tr>
            </table>
             
        </form>
        <!-- Login Form Ends here -->

        <p class="text-center btn-third biddut">Created by <a href="https://github.com/shahriarabiddut" target="_blank">Shahriar Ahmed Biddut</a></p>


<?php
    //Check Whether the submit button clicked
    if(isset($_POST['submit'])){
        // Process for login
        //1.Get the data from Login form
        $username = $_POST['username'];
        $password = $_POST['password'];
        //2.SQL to check whether the user with username and password exist or not
        $sql = "SELECT * FROM tbl_user WHERE username = '$username' AND password = '$password'";
        //3.execute
        $res = mysqli_query($conn,$sql);
        //4.user Type
        while ($row = $res->fetch_assoc()) {
            $userType =  $row['user_type'];
        }
        // Count rows to check whether the user exists or not
        $count = mysqli_num_rows($res);
        if($count==1){
            $_SESSION['user'] = $username; // to check whether the user is logged in or not and logout will unset
            $_SESSION['userType'] = $userType;
            $_SESSION['login']="<div class='btn-primary text-center'>Login Successful $username</div>";

            //EXCEPTION
            if($userType == "teacher"){
                header("location:".SITEURL.'panel/teacher/index.php');
            }else if($userType == "student"){
                header("location:".SITEURL.'panel/student/index.php');
            }else if($userType == "staff"){
                header("location:".SITEURL.'panel/staff/index.php');
            }else{
                $_SESSION['login']="<div class='btn-danger text-center'>Login Failed! Username Password didn't match</div>";
        header("location:".SITEURL.'login/index.php');
            }
            
            //EXCEPTION
            
        
        }else{
            //User NOT Available and Login Fail
            $_SESSION['login']="<div class='btn-danger text-center'>Login Failed! Username Password didn't match</div>";
        header("location:".SITEURL.'login/index.php');

        }




    }
?>

</div>
</body>
</html>