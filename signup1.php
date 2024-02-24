<?php
// Check if the form has been submitted
//if (isset($_POST['submit'])) {
    // Retrieve form data
   // $first_name = $_POST['first_name'];
  //  $last_name = $_POST['last_name'];
  //  $email = $_POST['Email'];
   /// $password = $_POST['Password'];
  //  $usn = $_POST['USN'];



$first_name=$_REQUEST['first_name'];
$last_name=$_REQUEST['last_name'];
$email=$_REQUEST['email'];
$usn=$_REQUEST['usn'];





    // Connect to your MySQL database (modify the credentials as needed)
    $servername = "localhost";
    $username = "root";
    $password_db = "";
    $dbname = "priormess";

    $conn = new mysqli($servername, $username, $password_db, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the database
    $sql = "INSERT INTO signup (first_name, last_name, email, usn)
            VALUES ('$first_name', '$last_name ', '$email', '$usn')";

    if ($conn->query($sql) === TRUE) {
        echo "User registered successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
//}
?>
