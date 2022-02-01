<?php
$db=new PDO('mysql:host=localhost;dbname=data_bbms', 'root','');
if($db){
    echo "Connect";
}
else{
    echo "not Connect";
}
?>