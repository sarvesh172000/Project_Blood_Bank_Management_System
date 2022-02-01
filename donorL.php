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
               <h1> Donor Registration  </h1><br><br>
               <center><div id="form"> 
                   <table>
                       <tr>
                           <td><center><b><font color="blue">Name</font></b></center></td>
                           <td><center><b><font color="blue">Surname Name</font></b></center></td>
                           <td><center><b><font color="blue">Address</font></b></center></td>
                           <td><center><b><font color="blue">City</font></b></center></td>
                           <td><center><b><font color="blue">Age</font></b></center></td>
                           <td><center><b><font color="blue">Blood Group</font></b></center></td>
                           <td><center><b><font color="blue">Mobile No</font></b></center></td>
                           <td><center><b><font color="blue">Email</font></b></center></td>
                       </tr>

                       <?php
                       $q=$db->query("SELECT*FROM donor_registration");
                       while($r1=$q->fetch(PDO::FETCH_OBJ))
                       {
                           ?>
                           <tr>
                               <td><center><?=$r1->name;?></center></td>
                               <td><center><?=$r1->Sname;?></center></td>
                               <td><center><?=$r1->address;?></center></td>
                               <td><center><?=$r1->city;?></center></td>
                               <td><center><?=$r1->age;?></center></td>
                               <td><center><?=$r1->bgroup;?></center></td>
                               <td><center><?=$r1->mno;?></center></td>
                               <td><center><?=$r1->email;?></center></td>
                           </tr>
                           <?php
                       }

                       ?>
                       
                   </table>
               </div></center>
               
            </div>
            <div id="footer"> 
            <p align="Center"><a href="logout.php"><font color="white">Logout</a></p></div>
        </div>
    </div>
</body>
</html>