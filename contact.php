<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "priormess";

$con = mysqli_connect($servername,$username,$password,$dbname);

if($con){
    echo "Connection ok";
}
else{
    echo "Connection failed".mysqli_connect_error();
}

if(isset($_POST['submit']))
{

    $Name=mysqli_real_escape_string($con,$_POST['Name']);
    $Email_ID=mysqli_real_escape_string($con,$_POST['Email_ID']);
    $phone=mysqli_real_escape_string($con,$_POST['phone']);
    $Message=mysqli_real_escape_string($con,$_POST['Message']);

    $insert_clint="insert into contact(Name,Email_ID,phone,Message)
    values('$Name','$Email_ID','$phone','$Message')";

    $run_costumer = mysqli_query($con, $insert_clint);

    if($run_costumer){
            echo"<script>alert('Your Message is sent')</script>";
        ?>
<META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://http://localhost/PriorMess/home.html">
<?php
        }

    else{
            echo"<script>alert('Your Message is not sent !')</script>";
        }
}
?>

<!--<p align="center"><a href="http://localhost/lifecare/login.php">login with Your new account</a></p>-->
<!--<p align="center"><a href="http://localhost/miniproject_ssp/deletion.php">View the records</a></p>-->
