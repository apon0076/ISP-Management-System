<?php include 'newconnection.php'; ?>


<?php
//conncetion code for client table
$Name=$_POST['P_Name'];
$Cost=$_POST['Cost'];
$Speed=$_POST['Speed'];
$P_Date=$_POST['P_Date'];


$sql="INSERT INTO package(P_Name, Cost, Speed, P_Date) VALUES ('$Name','$Cost','$Speed','$P_Date')";

if ($conn->query($sql) === TRUE) {
    echo "Package added succesfully .";
}
    else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }

    include 'package_insert.php';

?>