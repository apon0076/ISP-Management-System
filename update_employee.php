<?php include 'newconnection.php'; ?>
<form method="post" name="update" action="update_conn.php" />
<?php
$id = $_GET['id'];
?>
<input type="hidden" name="id" value="<?=$id?>">
<?php
$sql = "SELECT * FROM employee WHERE E_ID={$id}";
$result = mysqli_query($conn, $sql);

// display query results
while($row = $result->fetch_assoc())
    {
    	?>
        
<?php                   
    } 
?>


<center>Designation:<select name="Designation">
							  <option value="Technician">Technician</option>
							  <option value="Engineer">Engineer</option>
							  <option value="Accountant">Accountant</option>
							  <option value="Manager">Manager</option>
						</select></center>
						<br><center><pre> <input type="submit" value="Update" /> </pre></center><br>
							</form> 
<?php






