<?php include 'newconnection.php'; ?>
<form method="post" name="update" action="update.php" />
<?php
$id = $_GET['id'];
?>
<input type="hidden" name="id" value="<?=$id?>">
<?php
$sql = "SELECT * FROM client WHERE C_ID={$id}";
$result = mysqli_query($conn, $sql);

// display query results
while($row = $result->fetch_assoc())
    {
    	?>
        <center>Address: <input type="text" name="address" value="<?php echo $row['C_Address']; ?>"></center><br><br>
<?php                   
    } 
?>


<center>Package:<select name="package_name">
							  <option value="Silver">Silver</option>
							  <option value="Gold">Gold</option>
							  <option value="Dimond">Dimond</option>
							  <option value="Titenium">Titenium</option>
						</select></center>
						<br><center><pre> <input type="submit" value="Update" /> </pre></center><br>
							</form> 
<?php






