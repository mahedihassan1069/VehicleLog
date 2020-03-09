<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vehicleNew";

// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO vehicleregistration (fullName, idType, idNumber, mobile, address, vehicleRegNo, userid) VALUES ('".$_POST["fname"]."', '".$_POST["id-type"]."','".$_POST["idNumber"]."','".$_POST["mobile"]."','".$_POST["addr"]."','".$_POST["vehicle-reg"]."','".$_SESSION['id']."')";

if ($conn->query($sql) === TRUE) {

	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 




<!DOCTYPE html>
<html lang="en" >
<body>
	<br><button><a href = 'main_page.php'>Back</a> </button>
</body>
</html>