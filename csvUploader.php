<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vehicle";

// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["import"])) {

	$fileName = $_FILES["file"]["tmp_name"];

	if ($_FILES["file"]["size"] > 0) {

		// $csvAsArray = array_map('str_getcsv', file($tmpName));
		// echo $csvAsArray;

		$file = fopen($fileName, "r");

		
		$row = 1;

		while ((($column = fgetcsv($file, 10000, ",")) !== FALSE)) {
			$sqlInsert = "INSERT INTO vehicleregistration (fullName, idType, idNumber, mobile, address, vehicleRegNo) VALUES ('" . $column[0] . "', '" . $column[1] . "','" . $column[2] . "','" . $column[3] . "','" . $column[4] . "','" . $column[5] . "')";
			// $result = mysqli_query($conn, $sqlInsert);

			if ($conn->query($sqlInsert) === TRUE) {

				echo "Record No ".$row.' Saved!'.'<br>';
			} else {
				echo "Error: " . $sqlInsert . "<br>" . $conn->error;
			}
			$row++;
		}
		fclose($file);
	}
	else{
		echo "No file !";
	}
}

?>




<!DOCTYPE html>
<html>
<head>
	<title>ANPR System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container mt-5">
		<form class="form-horizontal" action="" method="post" name="uploadCSV"
		enctype="multipart/form-data">
		<div class="input-row">
			<label class="col-md-4 control-label">Choose CSV File</label> <input
			type="file" name="file" id="file" accept=".csv">
			<button type="submit" id="submit" name="import"
			class="btn-submit">Import</button>
			<br />

		</div>
		<div id="labelError"></div>
	</form>
</div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(
		function() {
			$("#frmCSVImport").on(
				"submit",
				function() {

					$("#response").attr("class", "");
					$("#response").html("");
					var fileType = ".csv";
					var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+("
						+ fileType + ")$");
					if (!regex.test($("#file").val().toLowerCase())) {
						$("#response").addClass("error");
						$("#response").addClass("display-block");
						$("#response").html(
							"Invalid File. Upload : <b>" + fileType
							+ "</b> Files.");
						return false;
					}
					return true;
				});
		});
	</script>
	</html>

