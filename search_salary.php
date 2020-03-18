<?php include 'adminheader.php';?>   

<form method="POST" style="text-align:center">
<h1>Salary Information Search</h1>
Search By Employee ID :<br>
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

$sql = "SELECT * FROM salary where E_ID='$id'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows>0) {
    // output data of each row
    echo "<table align=center border=1>
	<tr>
	<th>S_Trnx</th>
	<th>S_Amount</th>
	<th>S_Date</th>
	<th> E_ID</th>
	<th>Bank_Ac</th>
	</tr>";
    while($row = $result->fetch_assoc()) {
	echo "<tr>
          <td>".$row["S_Trnx"]."</td>
          <td>".$row["S_Amount"]."</td>
          <td>".$row["S_Date"]."</td>
          <td>".$row["E_ID"]. "</td>
          <td>".$row["Bank_Ac"]."</td>
	      </tr>";
    }
echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?> 





<?php include 'footer.php';?>