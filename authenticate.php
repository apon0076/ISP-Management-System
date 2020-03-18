<?php 
 require 'newconnection.php';

 session_start();

 $id = "";
 $password = "";
 
 if(isset($_POST['A_ID']))
 {
  $id = $_POST['A_ID'];
 }
 if (isset($_POST['A_Password'])) 
 {
  $password = $_POST['A_Password'];

 }
 
$result = $conn->query("SELECT * FROM admin WHERE A_ID=" . $id . " AND A_Password='" . $password . "'");

 if($result->num_rows == 0)
 {
  header('Location: admin.php?err=1');
 }
 else
 {

  $row = $result->fetch_assoc();
  session_regenerate_id();
  $_SESSION['sess_A_ID'] = $row['A_ID'];
  $_SESSION['sess_A_Password'] = $row['A_Password'];
        
  session_write_close();

  if( $_SESSION['sess_A_ID'] ||$_SESSION['sess_A_Password'])
  {
   header('Location: dashboard.php');
  }
}
?>