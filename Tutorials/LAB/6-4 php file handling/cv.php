<?php

if(isset($_POST["input"])){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $degree = $_POST["Degree"];
    $filename = $_FILES['cv']['name'];
    $type = $_FILES['cv']['type'];
    $size = $_FILES['cv']['size'];
    $tmp = $_FILES['cv']['tmp_name'];

    $move = move_uploaded_file($tmp, 'E:/'.$filename);

    if($move){
        Echo "File moved succesfully !"; 
    }

    else{
        Echo "File moved failed !"; 
    }



}

?>

<html>
<head>
</head>
<body>   
<table border=1>

<tr>
    <td> Name </td>
    <td>  <?php echo $name  ?> </td>
</tr>

<tr>
    <td> Email </td>
    <td>  <?php echo $email  ?> </td>
</tr>

<tr>
    <td> Degree </td>
    <td>  <?php echo $degree  ?> </td>
</tr>

<tr>
    <td> File Name </td>
    <td>  <?php echo $filename  ?> </td>
</tr>

<tr>
    <td> File type </td>
    <td>  <?php echo $type  ?> </td>
</tr>

<tr>
    <td> File size </td>
    <td>  <?php echo $size  ?> </td>
</tr>


</table>

</body>

</html>


<?php 






?>