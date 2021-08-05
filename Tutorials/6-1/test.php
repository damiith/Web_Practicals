<?php
/*
$filename = $_FILES['myfile']['name'];
$type = $_FILES['myfile']['type'];
$size = $_FILES['myfile']['size'];
$tmp = $_FILES['myfile']['tmp_name'];
$error = $_FILES['myfile']['error'];


print_r($_FILES['myfile']);

echo "$filename <br> " ;
echo "$type <br> ";
echo "$size <br> ";
echo "$tmp <br> ";
echo "$error <br> ";  


$filemove = move_uploaded_file($tmp, 'D:/'.$filename);

if($filemove){

    echo "File moved succesfully !";

}

else{
    echo "File moved fail";
}  



$fileopen = fopen($tmp,'r');

while(!feof($fileopen)) {

    $line=fgets($fileopen);
    echo "$line <br>";


} 

fclose($fileopen);  */


$name = $_POST["Fname"];
$email = $_POST["email"];
$tmp = $_FILES['cv']['tmp_name'];

echo "Name: $name <br>Email: $email";



$fileopen = fopen($tmp,'r');

while(!feof($fileopen)) {

    $line=fgets($fileopen);
    echo "$line <br>";


} 

fclose($fileopen);





?>