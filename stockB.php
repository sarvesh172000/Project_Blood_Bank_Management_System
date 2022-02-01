<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Donor Registration</title>
    <link rel="stylesheet" type="text/css" href="css/s1.css">
    <style type="text/css">
        td{
            width:200px;
            height: 4px;
        }
        
    </style>
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
               <h1> Stock Blood  </h1><br><br>
               <center><div id="form"> 
                   <table>
                       <tr>
                           <td><center><b><font color="blue">Name</font></b></center></td>
                           <td><center><b><font color="blue">Qty</font></b></center></td>
                           
                           
                       </tr>

                       <tr>
                            <td><center>O+</center></td>
                            <td><center>
                                <?php
                                $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='O+'");
                                echo $row=$q->rowcount();
                                ?>
                            </center></td>
                        </tr>

                        <tr>
                            <td><center>AB+</center></td>
                            <td><center>
                            <?php
                                $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB+'");
                                echo $row=$q->rowcount();
                            ?>
                            </center></td>
                        </tr>

                        <tr>
                            <td><center>A+</center></td>
                            <td><center>
                            <?php
                                $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='A+'");
                                echo $row=$q->rowcount();
                            ?>
                            </center></td>
                        </tr>

                        <tr>
                            <td><center>B+</center></td>
                            <td><center>
                            <?php
                                $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='B+'");
                                echo $row=$q->rowcount();
                            ?>
                            </center></td>
                        </tr>

                        <tr>
                            <td><center>AB-</center></td>
                            <td><center>
                            <?php
                                $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB-'");
                                echo $row=$q->rowcount();
                            ?>
                            </center></td>
                        </tr>
                    
                       
                   </table>
               </div></center>
               
            </div>
            <div id="footer"> 
            <p align="Center"><a href="logout.php"><font color="white">Logout</a></p></div>
        </div>
    </div>
</body>
</html>