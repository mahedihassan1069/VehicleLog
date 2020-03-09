<?php
session_start();

$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "vehicleNew";

// Create connection
$con = new mysqli($servername, $username, $dbpassword, $dbname);
// Check connection
if ($con->connect_error) {
	die("Connection failed: " . $con->connect_error);
}

if ( !isset($_POST['email'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	die ('Please fill both the username and password field!');
}

if ($stmt = $con->prepare('SELECT id, password FROM userinfo WHERE email = ?')) {
	$stmt->bind_param('s', $_POST['email']);
	$stmt->execute();
	$stmt->store_result();
}


if ($stmt) {
	$stmt->bind_result($id, $password);
	$stmt->fetch();
	if (password_verify($_POST['password'], $password)) {
	// if ($_POST['password'] === $password) {
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $_POST['email'];
		$_SESSION['id'] = $id;
		echo 'Welcome ' . $_SESSION['id'] . '!';
		header('Location: main_page.php');
	} else {
		echo 'Incorrect password!';
	}
	$stmt->close();
} else {
	echo 'Incorrect username!';
}

$con->close();
?> 

<!DOCTYPE html>
<html lang="en" >
<body>
	<br><button><a href = 'index.php'>GO</a> </button>
</body>
</html>