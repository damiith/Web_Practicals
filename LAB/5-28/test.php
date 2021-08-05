
<?php

/*
Q1

$number = 10;


if($number%2==0){
    echo " $number : Even Number ";
}

else{
    echo " $number : Odd Number ";
}


Q2
$days = array('Monday',
            'Teusday',
            'Wednesday',
            'Thursday',
            'Friday',
            'Saturday',
            'Sunday');


            $size = count($days);

        
            foreach($days as $x){
                echo " $x <br> ";
            } 

            echo " Today Date : ".$days[4];

            echo "<br> Length of the array : ".$size;   

Q3           
            $months = array("3"=>"March",
             "12"=>"December",
              "10"=>"October",
               "11"=>"November", 
                 "4"=>"April",
                "May"=>"5",
                   "6"=>"June");


                   echo $months["10"], "<br>".$months["3"];
                   echo "Month of may :" .$months["May"];
                
                foreach($months as $key => $val){
                    echo " $key  --->  $val <br>";
                }       

 
Q4                
            $Name = $_POST["Uname"];
            $age = $_POST["Age"];

            echo " Name : $Name <br>", "Age : $age ";  




Q5 */
            $fname = $_POST["fName"];
            $email = $_POST["email"];
            $Dprg  = $_POST["degree"];
            $Gender = $_POST["gender"];
            $Pw     = sha1($_POST["password"]);
            $RPw    = sha1($_POST["rPassword"]);
            $chek   = $_POST["agree"];

            if($Pw == $RPw){
                echo "Password is matched ! <br><br><br>";
            }

            else{
                echo "Please check your Password ! <br><br>";
            }




            if($fname=='') {
                echo " <p style = 'color:red' > Name is Empty ! </p>";
            }

            if($email=='') {
                echo " <p style = 'color:red' > Email is Empty ! </p>";
            }

            if($Dprg=='') {
                echo " <p style = 'color:red' > Degree Programe is Empty ! </p>";
            }

            if($Gender=='') {
                echo " <p style = 'color:red' > Gender is Empty ! </p>";
            }

            if($Pw=='') {
                echo " <p style = 'color:red' > Password is Empty ! </p>";
            }

            if($RPw=='') {
                echo " <p style = 'color:red' > Retype Password is Empty ! </p>";
            }

            if($chek=='') {
                echo " <p style = 'color:red' > Agree check button is Empty ! </p>";
            }

            


?>

<html>
        <head></head>
        <body>
            
        <table border="1">

        <tr>
        <td>Full Name</td>
        <td> <?php echo $fname;  ?> </td>
        </tr>
        
        <tr>
        <td>Email</td>
        <td> <?php echo $email;  ?> </td>
        </tr>

        <tr>
        <td>Degree Programme</td>
        <td> <?php echo $Dprg;  ?> </td>
        </tr>

        <tr>
        <td>Gender</td>
        <td> <?php echo $Gender;  ?> </td>
        </tr>

        <tr>
        <td>Password</td>
        <td> <?php echo $Pw;  ?> </td>
        </tr>

        <tr>
        <td>Retype Password</td>
        <td> <?php echo $RPw;  ?> </td>
        </tr>

        <tr>
        <td>Agree</td>
        <td> <?php echo $chek;  ?> </td>
        </tr>


        
        </table>


        </body>
        </html>
