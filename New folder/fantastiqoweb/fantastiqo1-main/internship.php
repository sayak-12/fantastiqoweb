<?php

if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$reference = $_POST['reference'];
$domain = $_POST['domain'];
$city = $_POST['city'];
$state = $_POST['state'];
$pincode = $_POST['pincode'];
$country = $_POST['country'];
$social_media = $_POST['socialmedia'];
}

$servername = "localhost";
$username = "root";
$password = "";
$database = "fantastiqo1";

// Create connection
$con = mysqli_connect($servername, $username, $password, $database);

if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

$sql = " INSERT INTO internship (name, email, number, reference, domain, city, state, pincode, country, socialmedia) VALUES ('$name', '$email', '$number', '$reference', '$domain', '$city', '$state', '$pincode', '$country', '$social_media)";
// insert in database 
$result = mysqli_query($con, $sql);

if($result)
{
	echo "Contact Records Inserted";
}

mysqli_close($con);

?>