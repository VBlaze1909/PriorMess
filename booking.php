<?php
session_start();

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

    $BreakFast=mysqli_real_escape_string($con,$_POST['BreakFast']);
    $Lunch=mysqli_real_escape_string($con,$_POST['Lunch']);
    $Snacks=mysqli_real_escape_string($con,$_POST['Snacks']);
    $Dinner=mysqli_real_escape_string($con,$_POST['Dinner']);
    $Type_Of_Payment=mysqli_real_escape_string($con,$_POST['Type_Of_Payment']);
    $Date=mysqli_real_escape_string($con,$_POST['Date']);
    $No_Of_Items=mysqli_real_escape_string($con,$_POST['No_Of_Items']);

    $insert_clint="insert into booking(BreakFast,Lunch,Snacks,Dinner,Type_Of_Payment,date,No_Of_Items)
    values('$BreakFast','$Lunch','$Snacks','$Dinner','$Type_Of_Payment','$Date','$No_Of_Items')";

    $run_costumer = mysqli_query($con, $insert_clint);

    if($run_costumer){
            echo"<script>alert('Order Placed successfully')</script>";
        ?>
<META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://localhost/priormess/home.html">
<?php
        }

    else{
            echo"<script>alert('Something is wrong..!')</script>";
        }
}
?>

<!--<p align="center"><a href="http://localhost/lifecare/login.php">login with Your new account</a></p>-->
<!--<p align="center"><a href="http://localhost/miniproject_ssp/deletion.php">View the records</a></p>-->
