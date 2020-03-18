<?php include 'newconnection.php'; ?>
<?php

$id=$_POST['id'];
$designation=$_POST['Designation'];


$sql = "UPDATE employee SET Designation='$designation' WHERE E_ID=$id";

            if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

include 'view_employee.php';