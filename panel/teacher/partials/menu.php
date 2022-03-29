<!-- Database Connection Starts --->
<?php include('C:/xampp/htdocs/cms/config/constants.php');?>
        <!-- Database Connection Ends --->
        <!-- Authorization Check Starts --->
        <?php include('C:/xampp/htdocs/cms/panel/teacher/partials/login-check.php');?>
        <!-- Authorization Check Ends --->
        <html>
    <head>
    <title>
   <?php if (isset($pageTitle)) {
       echo $pageTitle;
   } else {
       echo "Teacher Panel > Smart ClassRoom ";
   }?>
</title>

        <link rel="stylesheet" href="<?php echo SITEURL; ?>css/login.css">
    </head>

    <body>
        <div class="wrapper">
            <h1 class="text-center adminHead">Teacher Panel</h1>
        </div>
        <!-- Menu Section Starts --->
        <div class="menu text-center">
            <div class="wrapper">
            <ul>
                <li><a href="<?php echo SITEURL; ?>panel/teacher/">Dashboard</a></li>
                <li><a href="<?php echo SITEURL; ?>">Visit Website</a></li>
                <li><a href="#">Sample</a></li>
                <li class="btn-primary"><a href="../teacher/index.php"><?php echo $_SESSION['user']; ?></a></li>
                <li><a href="../teacher/partials/logout.php">LogOut</a></li>


            </ul>
            </div>
        </div>
        <!-- Menu Section Ends --->