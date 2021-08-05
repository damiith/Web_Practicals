<?php

$a = $_POST["fname"];
$b = $_POST["lname"];
$c = $_POST["uname"];
$d = sha1($_POST["pw"]);
$e = $_POST["gen"];
$f = $_POST["aca"];
$g = $_POST["email"];
$h = $_POST["pno"];


?>


<html>
<head></head>
<body>
    
    <table border=1>
        <tr>
            <td>First name</td>
            <td>  <?php echo $a; ?>   </td>
        </tr>

        <tr>
            <td>Last name</td>
            <td>  <?php echo $b; ?>   </td>
        </tr>

        <tr>
            <td>User name</td>
            <td>  <?php echo $c; ?>   </td>
        </tr>

        <tr>
            <td>Password</td>
            <td>  <?php echo $d; ?>   </td>
        </tr>

        <tr>
            <td>Gender</td>
            <td>  <?php echo $e; ?>   </td>
        </tr>
        <tr>
            <td>Academic Year:</td>
            <td>  <?php echo $f; ?>   </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>  <?php echo $g; ?>   </td>
        </tr>
        <tr>
            <td>Phone No</td>
            <td>  <?php echo $h; ?>   </td>
        </tr>



    </table>



</body>
</html>