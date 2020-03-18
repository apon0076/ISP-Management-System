<?php include 'header.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Client Information</title>
	<style>
		.admin-login
		{
		  width: 360px;
		  padding: 8% 0 0;
		  margin: auto;
		}

		.form button:hover,.form button:active,.form button:focus 
		{
  		background: #43A047;
		}

				body {
		  background: #76b852; /* fallback for old browsers */
		  background: -webkit-linear-gradient(right, #76b852, #8DC26F);
		  background: -moz-linear-gradient(right, #76b852, #8DC26F);
		  background: -o-linear-gradient(right, #76b852, #8DC26F);
		  background: linear-gradient(to left, #76b852, #8DC26F);
		  font-family: "Roboto", sans-serif;
		  -webkit-font-smoothing: antialiased;
		  -moz-osx-font-smoothing: grayscale;      
}

	</style>
</head>

<body>
	
	<div class="admin-login">
	    <div class="form">
			
				<form action="connection.php" method="POST">
					<fieldset>
						<center><legend><b><u>Client Information</u></b></legend></center><br><br>
						Name: <br> <input type="text" name="C_Name"> <br>
						Email: <br> <input type="text" name="C_Email"><br>
						Phone: <br> <input type="text" name="C_Phn"><br>
						Address: <br> <input type="text" name="C_Address"><br><br>

						
						Package:<select name="P_Name">
							  <option value="Silver">Silver</option>
							  <option value="Gold">Gold</option>
							  <option value="Dimond">Dimond</option>
							  <option value="Titenium">Titenium</option>
						</select>
					
						
						<br><br>
						<center><button type="submit" >Submit</button></center>
					</fieldset>
				</form><br><br><br>
			
		</div>
	</div>

</body>

</html>


<?php include 'footer.php';?> 