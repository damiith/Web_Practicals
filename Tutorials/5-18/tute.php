<?php 

/*
for($i=5;$i<=15;$i++){
    echo $i."<br>";
}
  */


$input=60;


if($input>151){
    $cost=$input*6.5;
    echo $cost;
}

if($input>101 && $input<150){
    $cost=$input*5.2;
    echo $cost;
}

if($input>51 && $input<100){
    $cost=$input*4;
    echo $cost;
}

else{
    $cost=$input*3.5;
    echo $cost;
}




?>
