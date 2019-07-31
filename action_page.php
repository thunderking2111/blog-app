<?php
$servername = "localhost";
$username = "root";
$password = "";

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

$sql = "insert into details (name,password) values('$Name','$Password')";

if(!mysqli_query($conn,$sql))
{
	echo "Values not inserted";
}
else
	echo "Values inserted successfully";

header("refresh:2; url=main.html");
?>

