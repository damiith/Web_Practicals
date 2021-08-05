<?php
include_once'dbcoon.php';

$select = "SELECT * FROM info;";
$result = mysqli_query($con,$select);

/*
$row = mysqli_fetch_assoc($result);
$row2 = mysqli_fetch_assoc($result);

print_r($row);
print_r($row2);
*/


 /*
 //for execute row by row
while($row = mysqli_fetch_assoc($result))
{
    echo $row['UID']."";
    echo $row['NAME']."";
    echo $row['PASSWORD']."<BR>";
}
*/



//for display a table
echo "<table border='1'>";

while($row = mysqli_fetch_assoc($result))
{
    echo "<tr><td>".$row['UID']."</td><td>".$row['NAME']."</td><td>".$row['PASSWORD']."</td></tr>";
}

echo "</table>";



mysqli_close($con);

?>