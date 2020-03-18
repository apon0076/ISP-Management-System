<?php include 'adminheader.php';?>    

<form method="POST" style="text-align:center">
<h1>Admin Information Search</h1>
Search By Admin Id:<br>
<input name="A_ID" value="" type="number"><br>
<br>

<input value="Go" type="submit">
</form>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "isp_management_system";
$id="";
if(isset($_POST["A_ID"])){
$id=$_POST["A_ID"];
}
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM admin where A_ID='$id'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows>0) {
    // output data of each row
    echo "<table align=center border=1>
  <tr>
  <th>ID</th>
  <th>Name</th>
  <th>Phn</th>
  <th>Email</th>
  <th>Address</th>
  
  </tr>";
   while($row = $result->fetch_assoc()) {
  echo "<tr>
          <td>".$row["A_ID"]."</td>
          <td>".$row["A_Name"]."</td>
          <td>".$row["A_Phn"]. "</td>
          <td>".$row["A_Email"]."</td>
          <td>".$row["A_Address"]."</td>
          
        </tr>";
    }
echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?> 





<?php include 'footer.php';?>