<?php include 'newconnection.php'; ?>


<?php
//conncetion code for client table
$id = $_GET['id'];
$sql = "DELETE FROM employee WHERE E_ID=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
include 'view_employee.php';

?>