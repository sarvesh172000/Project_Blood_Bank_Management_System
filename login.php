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
            <div id="header"><h2>Blood Bank Management System</h2></div>
            <div id="body">
                <br><br><br><br><br>
                <form action="" method="post">
                <table align="center">
                    <tr>
                        <td width="200px" height="50px"><b>Enter User Name</b></td>
                        <td width="200px" height="50px"><input type="text" name="un" placeholder="Enter Username " style="width: 150px; height: 30px;border-radius: 10px;"> </td>
                    </tr>
                    <tr>
                        <td width="200px" height="50px"><b>Enter Password </b></td>
                        <td width="200px" height="50px"><input type="text" name="ps" placeholder="Enter Password" style="width: 150px; height: 30px;border-radius: 10px;"> </td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="sub" value="Login"> </td>
                    </tr>
                </table>
            </form>
            <?php
             if(isset($_POST['sub']))
             {
                $un=$_POST['un'];
                $ps=$_POST['ps'];
                $q=$db->prepare("SELECT * FROM admin where uname='$un' &&  pass='$ps'");
                $q->execute();
                $res=$q->fetchAll(PDO::FETCH_OBJ);
                if($res)
                {
                    $_SESSION['un']=$un;
                   header("Location:admin-home.php");
                }
                else{
                    echo "Wrong User";
                }
             }
            ?>


            </div>
            <div id="footer"> <h4 align="center">{Sarvesh Waghmare}</h4> </div>
        </div>
    </div>
</body>
</html>