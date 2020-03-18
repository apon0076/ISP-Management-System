<?php include 'header.php';?> 
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "isp_management_system";


$conn = new mysqli($hostname,$username,$password,$dbname);

if($conn->connect_error) {
    die("Connection Fail".$conn->connect_error);
}


 //connection code for package table

    $sql="SELECT P_ID, P_Name, Cost, Speed, P_Date FROM package";

    $result = $conn->query($sql);

    if ($result->num_rows>0) {
    // output data of each row
   echo "<table align=center border=1>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Cost</th>
    <th>Speed</th>
    <th>Declaration Date</th>
    </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) 
    
    {
        echo "<tr>
        <td>".$row["P_ID"]. "</td>
        <td>".$row["P_Name"]."</td>
        <td>".$row["Cost"]."</td>
        <td>".$row["Speed"]."</td>
        <td>".$row["P_Date"]."</td>
        
        </tr>";
    }
    echo "</table>";
}
else {
    echo "0 results";
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Package</title>
</head>
<body>
<ul>
	<center><a href="client.php"><b>Click to Get Connected</b></a></center>	
</ul>
</body>
</html>



<?php include 'footer.php';?>

