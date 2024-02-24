<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "priormess";
    
    $con = mysqli_connect($servername,$username,$password,$dbname);

    if(isset($_POST['submit']))
    {
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];

        $query = "SELECT * FROM signup WHERE Email= '$Email' && password='$Password'";
        $data = mysqli_query($con,$query);

        $total = mysqli_num_rows($data);

        // echo $total;

        if($total == 1)
        {
            echo "Login Succefull";
            // header('location:display.php');
            header('location:indexlog.php');
            $_SESSION['Email']=$Email;

            //<META HTTP-EQUIV="Refresh" CONTENT = "0; URL=file:///C:/xampp/htdocs/PriorMess/home.html">


        }
        else
        {
            echo "<font color = 'red'> Invalid mail ID or Password";
        }
    }
?>