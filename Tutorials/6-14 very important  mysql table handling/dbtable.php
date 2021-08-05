<?php
include_once'dbcoon.php';

$table =  "CREATE TABLE info(UID INT(10) PRIMARY KEY,
            NAME VARCHAR(20), PASSWORD VARCHAR(20));";

           if(mysqli_query($con,$table)){
               echo "table created !";
           } 

           else{
               echo "table create fail !";
           }

           mysqli_close($con);
?>