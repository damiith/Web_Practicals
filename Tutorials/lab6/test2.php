<?php

if(isset($_POST['upload'])){


$filename = $_FILES['Ufile']['name'];
$type = $_FILES['Ufile']['type'];
$size = $_FILES['Ufile']['size'];
$tmp = $_FILES['Ufile']['tmp_name'];



echo "file name : ".$filename;
echo "<br> file type : ".$type;
echo "<br> file size : ".$size;


move_uploaded_file($tmp, 'D:/'.$filename);


}



?>