<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<body>
    <div class="full">
        <div id="inner_full">
            <div id="header"><h2><a href="admin-home.php" style="text-decoration: none; color: white;">Blood Bank Management System</a></h2></div>
            <div id="body">
               <br>
               <?php
               $un=$_SESSION['un'];
               if(!$un)
               {
                   header("Location:login.php" );
               }
               
               ?>
               <h1> Welcome Admin </h1><br><br><br><br>
               <ul>
                   <li><a href="donorR.php">Donar Registration</a></li><br>
                   <li><a href="donorL.php">Donar List</a></li><br>
                   <li><a href="stockB.php">Stock Blood </a></li><br>
                   <br><br>
               </ul>

            </div>
            <div id="footer"> 
            <p align="Center"><a href="logout.php"><font color="white">Logout</a></p></div>
        </div>
    </div>
</body>
</html>