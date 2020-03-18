<?php include 'newconnection.php'; ?>


<?php
//conncetion code for client table
$Name=$_POST['C_Name'];
$Phn=$_POST['C_Phn'];
$Email=$_POST['C_Email'];
$Address=$_POST['C_Address'];
$Package_Name=$_POST['P_Name'];


$sql="INSERT INTO client(C_Name, C_Phn, C_Email, C_Address, P_Name) VALUES ('$Name','$Phn','$Email','$Address','$Package_Name')";

if ($conn->query($sql) === TRUE) {
    echo "Thanks for your Request. You will get your Connection Within 24 hours.";
}
    else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>