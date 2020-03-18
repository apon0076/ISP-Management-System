<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "isp_management_system";


$conn = new mysqli($hostname,$username,$password,$dbname);

if($conn->connect_error) {
    die("Connection Fail".$conn->connect_error);
}

//conncetion code for client table
$Amount=$_POST['S_Amount'];
$Date=$_POST['S_Date'];
$E_ID=$_POST['E_ID'];
$Bank=$_POST['Bank_Ac'];



$sql="INSERT INTO salary(S_Amount, S_Date, E_ID, Bank_Ac) VALUES ('$Amount','$Date','$E_ID','$Bank')";

if ($conn->query($sql) === TRUE) {
    echo "Thanks for your Information";
}
    else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>