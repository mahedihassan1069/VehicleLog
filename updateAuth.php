<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vehicle";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$decision = $_POST["yes"];
$id = $_POST["ocr"];

$sql = "UPDATE vehiclelogs SET Authorization = '$decision' WHERE plateNumber = '$id' ";

$conn->query($sql);

$conn->close();
?> 
