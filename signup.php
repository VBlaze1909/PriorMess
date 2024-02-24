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

    $first_name=mysqli_real_escape_string($con,$_POST['first_name']);
    $last_name=mysqli_real_escape_string($con,$_POST['last_name']);
    $Email=mysqli_real_escape_string($con,$_POST['Email']);
    $Password=mysqli_real_escape_string($con,$_POST['Password']);
    $USN=mysqli_real_escape_string($con,$_POST['USN']);

    $insert_clint="insert into signup(first_name,last_name,email,password,usn)
    values('$first_name','$last_name','$Email','$Password','$USN')";

    $run_costumer = mysqli_query($con, $insert_clint);

    if($run_costumer){
            echo"<script>alert('Signup successful')</script>";
        ?>
<!--<META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://localhost/priormess/login.html">-->
<?php
        }

    else{
            echo"<script>alert('Something is wrong..!')</script>";
        }
}
?>

<!--<p align="center"><a href="http://localhost/lifecare/login.php">login with Your new account</a></p>-->
<!--<p align="center"><a href="http://localhost/miniproject_ssp/deletion.php">View the records</a></p>-->
