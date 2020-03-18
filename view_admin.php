<?php include 'adminheader.php';?>   

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "isp_management_system";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM admin";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    echo "<table align=center border=1>
    <tr>
	<th>A_ID</th>
	<th>A_Name</th>
	<th>A_Phn</th>
	<th>A_Email</th>
	<th>A_Address</th>
	<th>A_Password</th>
	</tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) 
    
    {
        echo "<tr>
        <td>" . $row["A_ID"]. "</td>
        <td>" . $row["A_Name"]."</td>
        <td>".$row["A_Phn"]."</td>
        <td>".$row["A_Email"]."</td>
        <td>".$row["A_Address"]."</td>
        <td>".$row["A_Password"]."</td>
        
        </tr>";
    }
    echo "</table>";
}
else {
    echo "0 results";
}

mysqli_close($conn);
?>




<?php include 'footer.php';?>