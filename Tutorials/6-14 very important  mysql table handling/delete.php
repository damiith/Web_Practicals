<?php
include_once'dbcoon.php';

$del = $_POST['uid'];

$delete = "DELETE FROM info WHERE  UID ='$del' ;";

if(mysqli_query($con,$delete)){
    echo "Record deleted successfully !";
}




mysqli_close($con);


?>