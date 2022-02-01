<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Donor Registration</title>
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
               <h1> Donor Registration  </h1><br><br>
               <center><div id="form"> 
                   <form action="" method="post">
                   <table>
                       <tr>
                           <td width="200px" height="50px">Enter Name</td>
                           <td width="200px" height="50px"><input type="text" name="name" placeholder="Enter Name"> </td>

                           <td width="200px" height="50px">Enter Surname Name</td>
                           <td width="200px" height="50px"><input type="text" name="Sname" placeholder="Enter Surname Name"> </td>


                       </tr>
                       <tr>
                        <td width="200px" height="50px">Enter Address</td>
                        <td width="200px" height="50px"><input type="text" name="address" > </textarea> </td>

                        <td width="200px" height="50px">Enter City</td>
                        <td width="200px" height="50px"><input type="text" name="city" placeholder="Enter City"> </td>
                    </tr>

                    <tr>
                        <td width="200px" height="50px">Enter Age</td>
                        <td width="200px" height="50px"><input type="text" name="age" placeholder="Enter age"> </td>

                        <td width="200px" height="50px"> Select Blood Group </td>
                        <td width="200px" height="50px">
                            <select name="bgroup">
                                <option>O+</option>
                                <option>AB+</option>
                                <option>A+</option>
                                <option>B+</option>
                                <option>AB-</option>
                            </select> 
                        </td>
                    </tr>

                    <tr>
                        <td width="200px" height="50px">Enter Mobile No</td>
                        <td width="200px" height="50px"><input type="text" name="mno" placeholder="Enter Mobile No"> </td>

                        <td width="200px" height="50px">Enter Email</td>
                        <td width="200px" height="50px"><input type="text" name="email" placeholder="Enter Email"> </td>

                    </tr>

                    <tr>
                        <td><input type="submit" name="sub" value="save"> </td>
                    </tr>



                   </table>
                </form>

                <?php
                if(isset($_POST['sub']))
                {
                    $name=$_POST['name'];
                    $Sname=$_POST['Sname'];
                    echo $address=$_POST['address'];
                    $city=$_POST['city'];
                    $age=$_POST['age'];
                    echo $bgroup=$_POST['bgroup'];
                    $mno=$_POST['mno'];
                    $email=$_POST['email'];

                    $q=$db->prepare("INSERT INTO donor_registration (name,Sname,address,city,age,bgroup,mno,email) VALUES (:name,:Sname,:address,:city,:age,:bgroup,:mno,:email)");

                    $q->bindValue('name',$name);
                    $q->bindValue('Sname',$Sname);
                    $q->bindValue('address',$address);
                    $q->bindValue('city',$city);
                    $q->bindValue('age',$age);
                    $q->bindValue('bgroup',$bgroup);
                    $q->bindValue('mno',$mno);
                    $q->bindValue('email',$email);

                    if($q->execute())
                    {
                        echo "<script>alert('Donor Registration Successfull') </script>";
                    }

                    else
                    {
                        echo "<script>alert('Donor Registration Unsuccessfull') </script>";

                    }
                   
                }
                else
                {
                    echo"Not Click";
                }

                ?>
               </div></center>
               
            </div>
            <div id="footer"> 
            <p align="Center"><a href="logout.php"><font color="white">Logout</a></p></div>
        </div>
    </div>
</body>
</html>