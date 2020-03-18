<?php include 'newconnection.php'; ?>
<?php

$id=$_POST['id'];
$add=$_POST['address'];
$package=$_POST['package_name'];

$sql = "UPDATE client SET C_Address='$add', P_Name='$package' WHERE C_ID=$id";

            if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

include 'view_client.php';