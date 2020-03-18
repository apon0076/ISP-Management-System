<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "isp_management_system";


$conn = new mysqli($hostname,$username,$password,$dbname);

if($conn->connect_error) {
    die("Connection Fail".$conn->connect_error);
}

//conncetion code for employee table
$C_ID=$_POST['C_ID'];
$B_Date=$_POST['B_Date'];
$P_Name=$_POST['P_Name'];
$Payment_Process=$_POST['Payment_Process'];
$Amount=$_POST['Amount'];




$sql="INSERT INTO bill(C_ID, B_Date, P_Name, Payment_Process,Amount) VALUES ('$C_ID','$B_Date','$P_Name','$Payment_Process','$Amount')";

if ($conn->query($sql) === TRUE) {
    echo "Thanks for your Request.";
}
    else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }


include 'index.php';
?>

