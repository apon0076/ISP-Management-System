<?php include 'adminheader.php';?>   

<form method="POST" style="text-align:center">
<h1>Employee Information Search</h1>
Search By Employee Id:<br>
<input name="E_ID" value="" type="number"><br>
<br>

<input value="Go" type="submit">
</form>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "isp_management_system";
$id="";
if(isset($_POST["E_ID"])){
$id=$_POST["E_ID"];
}
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM employee where E_ID='$id'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows>0) {
    // output data of each row
    echo "<table align=center border=1>
	<tr>
	<th>E_ID</th>
	<th>E_Name</th>
	<th>E_Email</th>
	<th>E_Phn</th>
	<th>E_Address</th>
	<th>Designation</th>
	<th>D_Joining</th>
	
	</tr>";
    while($row = $result->fetch_assoc()) {
	echo "<tr>
          <td>".$row["E_ID"]."</td>
          <td>".$row["E_Name"]."</td>
          <td>".$row["E_Email"]."</td>
          <td>".$row["E_Phn"]. "</td>
          <td>".$row["E_Address"]."</td>
          <td>".$row["Designation"]."</td>
          <td>".$row["D_Joining"]."</td>

	      </tr>";
    }
echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?> 





<?php include 'footer.php';?>