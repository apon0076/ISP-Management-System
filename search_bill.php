<?php include 'adminheader.php';?>   

<form method="POST" style="text-align:center">
<h1>Bill Information Search</h1>
Search By Bill Trnx:<br>
<input name="B_Trnx" value="" type="number"><br>
<br>
<br><br>
<input value="Go" type="submit">
</form>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "isp_management_system";
$id="";
if(isset($_POST["B_Trnx"])){
$id=$_POST["B_Trnx"];
}
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM bill where B_Trnx='$id'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows>0) {
    // output data of each row
    echo "<table align=center border=1>
	<tr>
	<th>B_Trnx</th>
	<th>Amount</th>
	<th>C_ID</th>
	<th>B_Date</th>
	
	</tr>";
    while($row = $result->fetch_assoc()) {
	echo "<tr>
          <td>".$row["B_Trnx"]."</td>
          <td>".$row["Amount"]."</td>
          <td>".$row["C_ID"]."</td>
          <td>".$row["B_Date"]. "</td>
	      </tr>";
    }
echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?> 





<?php include 'footer.php';?>