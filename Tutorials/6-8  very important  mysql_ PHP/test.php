

<?php

//create a connection with mysql server 
$con = mysqli_connect("localhost","root","");

if($con){
    echo "Connection Successful";
}

else{
    echo "Connection Fail ".mysqli_connect_error();
}


//create a database
/*
$db = "CREATE DATABASE SDB";

if(mysqli_query($con,$db)){
    echo "Database Created";
}

else{
    echo "Database creation fail".mysqli_error($con);
} 
*/


//select DB
mysqli_select_db($con,"SDB");
/*
//create a table
$TABLE = "CREATE TABLE details(SID INT(10) PRIMARY KEY,NAME VARCHAR(20),PASSWORD VARCHAR(20))";

if(mysqli_query($con,$TABLE)){
echo "Table created succesfully";

}

else{
    echo "Table created fail";   
}    */




/*
//Insert Data to the table-From php page

$insert = "INSERT INTO details VALUES('1000','AMAL','1234')";

if(mysqli_query($con,$insert)){
    echo "<br> Data insert succesfully";
    
    }
    
    else{
        echo "<br> Data insert fail".mysqli_error($con);   
    }     */



 //**insert Data to the table-using html form by super global variables**

$sid = $_POST['stid'];
$sname = $_POST['sname'];
$pass  =  md5($_POST['pw']);  

$insert = "INSERT INTO details VALUES('$sid','$sname','$pass')";

if(mysqli_query($con,$insert)){
    echo "<br> Data insert succesfully";
    
    }
    
    else{
        echo "<br> Data insert fail".mysqli_error($con);   
    } 


//for close connection
mysqli_close($con)







?>