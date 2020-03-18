<?php include 'newconnection.php'; ?>


<?php
//conncetion code for client table
$id = $_GET['id'];
$sql = "DELETE FROM client WHERE C_ID=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
include 'view_client.php';

?>