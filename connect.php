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

    $start_date = $_POST["start"];
    $end_date = $_POST["end"];   


    $query2 =  "SELECT vehicleregistration.vehicleRegNo, vehicleregistration.fullName, vehiclelogs.Date, vehiclelogs.plateNumber, vehiclelogs.imagePath, vehiclelogs.timestamp, vehiclelogs.Authorization FROM vehiclelogs  LEFT JOIN vehicleregistration ON vehiclelogs.plateNumber = vehicleregistration.vehicleRegNo WHERE  vehiclelogs.Date BETWEEN '$start_date' AND '$end_date' ORDER BY vehiclelogs.Date DESC,vehiclelogs.timestamp DESC";

    $result2 = mysqli_query($conn,$query2);     
    ?>

    <p>Showng records from <strong><?php echo $start_date?></strong> to <strong><?php echo $end_date?> </strong> in descending order.</p>
    <table style="color: #fff; " class="table table-bordered table-hover " >
                    <thead>       
                            <tr>
                                <th style="text-align:center">Name</th>
                                <th style="text-align:center">Vehicle Reg No</th>
                                <th style="text-align:center">OCR</th>
                                <th style="text-align:center">Vehicle</th>
                                <th style="text-align:center">Date</th>
                                <th style="text-align:center">Timestamp</th>
                                <th style="text-align:center">Authorization</th>
                            </tr>
                        </thead>    
                        
                        <tbody >
                        <?php
                        if(mysqli_num_rows($result2)==0){
                    ?>
                        <tr>
                             <td colspan ="7" style="text-align:center">No records found!</td>
                        </tr>
                    <?php 
                        } else
                                while($rows2 = mysqli_fetch_array($result2))
                                {                                
                     ?>      
                            <tr>
                            <td style="text-align:center"><?php if($rows2['vehicleRegNo']==$rows2['plateNumber']) echo $rows2['fullName']; else echo '';  ?></td>
                            <td style="text-align:center"><?php if($rows2['vehicleRegNo']==$rows2['plateNumber']) echo $rows2['plateNumber']; else echo '';  ?></td>
                            <td style="text-align:center"><?php echo $rows2['plateNumber']; ?></td>
                            <td style="text-align:center" ><img id = "myImg" onclick="zoomFunction('<?php echo $rows2['imagePath']?>')" src = "<?php echo $rows2['imagePath']?>" width = "50" height = "30"> </td>
                            <td style="text-align:center"><?php echo $rows2['Date']; ?></td>
                            <td style="text-align:center"><?php echo $rows2['timestamp']; ?></td>
                            <td style="text-align:center"><?php echo $rows2['Authorization']; ?></td>
                            </tr> 
                        <?php
        
                            }
                        ?>
                        
</tbody>
 </table><br><br>
    