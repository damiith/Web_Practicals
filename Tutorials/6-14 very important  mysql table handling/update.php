<?php
include_once'dbcoon.php';

$userid = $_POST['uid'];
$newname = $_POST['nname'];
$newpass = sha1($_POST['npass']);


$update = "UPDATE info SET NAME ='$newname', PASSWORD ='$newpass' WHERE UID = '$userid';";


if(mysqli_query($con,$update)){
    echo "Record updated successfully !";
}


?>