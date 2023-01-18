<?php

if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$contact_number = $_POST['contact_number'];
}

$servername = "localhost";
$username = "root";
$password = "";
$database = "fantastiqo";

// Create connection
$con = mysqli_connect($servername, $username, $password, $database);

if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

$sql = " INSERT INTO visitor_log (name, email, contact_number) VALUES ('$name', '$email', '$contact_number')";
// insert in database 
$result = mysqli_query($con, $sql);

if($result)
{
	echo header("Location: https://thefantastiqo.com/home.html");
}
mysqli_close($con);

?>