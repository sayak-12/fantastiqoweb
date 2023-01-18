<?php

if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$fathername = $_POST['fathername'];
$mothername = $_POST['mothername'];
$college = $_POST['college'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$pincode = $_POST['pincode'];
$country = $_POST['country'];
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

$sql = " INSERT INTO internship (name, email, fathername, mothername, college, address, city, state, pincode, country) VALUES ('$name', '$email', '$fathername', '$mothername', '$college', '$address', '$city', '$state', '$pincode', '$country')";
// insert in database 
$result = mysqli_query($con, $sql);

if($result)
{
	echo "Contact Records Inserted";
}

mysqli_close($con);

?>