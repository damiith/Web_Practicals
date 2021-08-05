<?php
include_once'dbcoon.php';

/*
$insert = "INSERT INTO info VALUES('1000','Amal','1234');";

if(!mysqli_query($con,$insert)){
    echo "Data insertion failed !";
} */

$uid = $_POST["uid"];
$uname = $_POST["fname"];
$pass = sha1($_POST["pass"]);

$insert2 = "INSERT INTO info VALUES('$uid','$uname','$pass');";

if(!mysqli_query($con,$insert2)){
    echo "Data insertion failed !";
} 


mysqli_close($con);

?>