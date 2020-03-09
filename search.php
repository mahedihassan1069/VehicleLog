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
$query =  "SELECT vehicleregistration.vehicleRegNo, vehicleregistration.fullName, vehiclelogs.plateNumber, vehiclelogs.imagePath, vehiclelogs.Date, vehiclelogs.timestamp, vehiclelogs.Authorization FROM vehiclelogs  LEFT JOIN vehicleregistration ON vehiclelogs.plateNumber = vehicleregistration.vehicleRegNo ORDER BY vehiclelogs.Date DESC,vehiclelogs.timestamp DESC";

$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result)==0){
   ?>
        <tr>
            <td colspan ="7" style="text-align:center">No records found!</td>
        </tr>
         <?php 
} else
while($rows = mysqli_fetch_array($result)){
?>
<tr>
    <td style="text-align:center"><?php if($rows['vehicleRegNo']==$rows['plateNumber']) echo $rows['fullName']; else echo ''; ?></td>
    <td style="text-align:center"><?php  if($rows['vehicleRegNo']==$rows['plateNumber']) echo $rows['plateNumber']; else echo '';?></td>
    <td style="text-align:center"><?php echo $rows['plateNumber']; ?></td>
    <td style="text-align:center" ><img id = "myImg" onclick="zoomFunction('<?php echo $rows['imagePath']?>')" src = "<?php echo $rows['imagePath']?>" style = " width: 50px;   height: 30px;"> </td>
    <td style="text-align:center"><?php echo $rows['Date']; ?></td>
    <td style="text-align:center"><?php echo $rows['timestamp']; ?></td>
    <td style="text-align:center"><?php if($rows['Authorization'] != ""){echo $rows['Authorization'];} else { ?> <input onclick = " yesHide(this.parentElement,'Yes')" style="background-color: green; color:white;" value="Yes"  type="submit" name="yes"/> <input onclick = " yesHide(this.parentElement,'No')" style="margin-left: 30px; background-color: red; color:white;" type="submit" name="no" value="No"/> <?php } ?></td>
</tr>

<script>
function yesHide(a,c){
    var b = a.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.innerHTML;
    $(document).ready(function () {
    $.post("updateAuth.php", { yes: c, ocr: b},
    function(data) {
    });

    });
}
</script>
    <?php
}
 ?>