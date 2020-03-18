<?php include 'adminheader.php';?>   

<form method="POST" style="text-align:center">
<h1>Package information Search</h1>
Search By Package ID:<br>
<input name="P_ID" value="" type="number"><br>
<br>

<input value="Go" type="submit">
</form>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "isp_management_system";
$id="";
if(isset($_POST["P_ID"])){
$id=$_POST["P_ID"];
}
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM package where P_ID='$id'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows>0) {
    // output data of each row
    echo "<table align=center border=1>
	<tr>
	<th>P_ID</th>
	<th>P_Name</th>
	<th> Cost</th>
	<th>Speed</th>
	<th>P_Date</th>
	
	</tr>";
    while($row = $result->fetch_assoc()) {
	echo "<tr>
          <td>".$row["P_ID"]."</td>
          <td>".$row["P_Name"]."</td>
          <td>".$row["Cost"]."</td>
          <td>".$row["Speed"]. "</td>
          <td>".$row["P_Date"]."</td>

	      </tr>";
    }
echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?> 





<?php include 'footer.php';?>