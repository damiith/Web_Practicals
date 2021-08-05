<?php

//Declare 2 variables num1 and num2
//Assign two values
//Display the sum in h1 tag

/*$num1=10;
$num2=15.5;

$sum=$num1+$num2;

echo "<h1>Sum :$sum</h1>"; */

/*
$age=array(10,20,30);    //manually print

echo $age[0]."<br>";
echo $age[1]."<br>";
echo $age[2]."<br>";

foreach ($age as $a){   // foreach loop
    echo $a."<br>";
}

$size= count($age); //function for get size of the array

for($i=0;$i<$size;$i++){
    echo $age[$i]."<br>";
}

*/

//create an array called names print first 3 names of it


$name=array("Damith","Tom","David");

echo $name[0]."<br>" ;
echo $name[1]."<br>" ;
echo $name[2]."<br>" ; 


$size= count($name);

for($i=0;$i<$size;$i++){ // for loop
    echo $name[$i]."<br>";
}

foreach ($name as $n){   // foreach loop
    echo $n."<br>";
}


?>