<?php include 'adminheader.php';?>   

<form method="POST" style="text-align:center">
<h1>Client Information Search</h1>
Search By Client Id:<br>
<input name="C_ID" value="" type="number"><br>
<br>
<input value="Go" type="submit"><br>
</form>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "isp_management_system";
$id="";
if(isset($_POST["C_ID"])){
$id=$_POST["C_ID"];
}
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM client where C_ID='$id'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows>0) {
    // output data of each row
    echo "<table align=center border=1>
	<tr>
	<th>C_ID</th>
	<th>C_Name</th>
	<th>C_Phn</th>
	<th>C_Email</th>
	<th>C_Address</th>
	<th>P_Name</th>
	</tr>";
    while($row = $result->fetch_assoc()) {
	echo "<tr>
          <td>".$row["C_ID"]."</td>
          <td>".$row["C_Name"]."</td>
          <td>".$row["C_Phn"]. "</td>
          <td>".$row["C_Email"]."</td>
          <td>".$row["C_Address"]."</td>
          <td>".$row["P_Name"]."</td>
	      </tr>";
    }
echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?> 





<?php include 'footer.php';?>