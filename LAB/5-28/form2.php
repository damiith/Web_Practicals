<?php

$num1 = $_POST["no1"];
$num2 = $_POST["no2"];
$btn = $_POST["btn"];


if($btn == "sum"){
    echo $num1+$num2;
}

if($btn == "sub"){
    echo $num1-$num2;
}

if($btn == "div"){
    echo $num1/$num2;
}

if($btn == "mul"){
    echo $num1*$num2;
}



?>