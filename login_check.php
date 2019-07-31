<?php
$servername = "localhost";
$username = "root";
$password = "";

$name = $_POST('check_firstname');
$pass = $_POST('check_password');

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    echo "Not connected to the server";
} 

if(!mysqli_select_db($conn,'neel'))
{
	echo "Database not selected";
}
	
$Name = $_POST['firstname'];
$Password = $_POST['password'];


if(!mysqli_select_db($conn,'neel'))
{
	echo "Database not selected";
}

$query_name = "select name from details where name='$name'";
if(!$query_name) 
	echo "Username not found";
$query_password = "select password from details where name='$name'";
if()
?>

