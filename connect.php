<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "wecare";

// payment_info

$con = mysqli_connect($servername, $username, $password, $database);

if($con){
    header('location: index.php');
}else{
    echo "No Connection";
}

mysqli_select_db($con, $database);

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$emailid =$_POST['emailid'];
$contact = $_POST['contact'];
$comments = $_POST['comments'];

$query = "insert into wecare_info (firstname, lastname, emailid, contact, comments) VALUES ('$firstname', '$lastname', '$emailid', '$contact', '$comments')";

mysqli_query($con, $query);

?>