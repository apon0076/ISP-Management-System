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

$sql = "SELECT * FROM client";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    echo "<table align=center border=1>
    <tr>
	<th>Client ID</th> 
	<th>Name</th>
	<th>Phn</th>
	<th>Email</th>
	<th>Address</th>
	<th>Name</th>
	<th>Delete</th>
	<th>Update</th>
	</tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) 
    
    {
        echo "<tr>
        <td>" . $row["C_ID"]. "</td>
        <td>" . $row["C_Name"]."</td>
        <td>".$row["C_Phn"]."</td>
        <td>".$row["C_Email"]."</td>
        <td>".$row["C_Address"]."</td>
        <td>".$row["P_Name"]."</td>
        <td type='button'><a href='delete_client.php?id={$row['C_ID']}'?>Delete</a></td>
        <td type='button'><a href='update_index.php?id={$row['C_ID']}'?>Update</a></td>
        
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