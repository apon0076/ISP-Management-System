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

$sql = "SELECT * FROM employee";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    echo "<table align=center border=1>
    <tr>
	<th>E_ID</th>
	<th>E_Name</th>
	<th>E_Phn</th>
	<th>E_Email</th>
	<th>E_Address</th>
	<th>Designation</th>
    <th>D_Joining</th>
    <th>Delete</th>
    <th>Update</th>
	</tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) 
    
    {
        echo "<tr>
        <td>" . $row["E_ID"]. "</td>
        <td>" . $row["E_Name"]."</td>
        <td>".$row["E_Phn"]."</td>
        <td>".$row["E_Email"]."</td>
        <td>".$row["E_Address"]."</td>
        <td>".$row["Designation"]."</td>
        <td>".$row["D_Joining"]."</td>
        <td type='button'><a href='delete_employee.php?id={$row['E_ID']}'?>Delete</a></td>
        <td type='button'><a href='update_employee.php?id={$row['E_ID']}'?>Update</a></td>
        
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