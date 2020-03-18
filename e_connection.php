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
$Name=$_POST['E_Name'];
$Phn=$_POST['E_Phn'];
$Email=$_POST['E_Email'];
$Address=$_POST['E_Address'];
$Designation=$_POST['Designation'];
$D_Joining=$_POST['D_Joining'];



$sql="INSERT INTO employee(E_Name, E_Phn, E_Email, E_Address,Designation,D_Joining) VALUES ('$Name','$Phn','$Email','$Address','$Designation','$D_Joining')";

if ($conn->query($sql) === TRUE) {
    echo "Thanks for your Request. Your ID is = E_ID";
}
    else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>