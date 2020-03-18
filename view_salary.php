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

$sql = "SELECT * FROM salary";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    echo "<table align=center border=1>
    <tr>
	<th>S_Trnx</th>
	<th>S_Amount</th>
	<th>S_Date</th>
	<th>E_ID</th>
	<th>Bank_Ac</th>
	</tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) 
    
    {
        echo "<tr>
        <td>" . $row["S_Trnx"]. "</td>
        <td>" . $row["S_Amount"]."</td>
        <td>".$row["S_Date"]."</td>
        <td>".$row["E_ID"]."</td>
        <td>".$row["Bank_Ac"]."</td>
        
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