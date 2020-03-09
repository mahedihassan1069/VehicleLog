<?php
$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "vehicleNew";

// Create connection
$conn = new mysqli($servername, $username, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$timezone = date_default_timezone_get();
$password = $_POST['psw'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);


$sql = "INSERT INTO userinfo (email, fullName, password, allowedvisitorparking, allowedfixedparking, unitnum_address)
VALUES ('".$_POST["email"]."', '','".$hashed_password."','null','null','".$_POST["unitAddress"]."')";


if ( $conn->query($sql)=== TRUE) {
    
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
<!DOCTYPE html>
<html lang="en" >
    <body>
        <br><button><a href = 'index.php'>Back</a> </button>
    </body>
</html>