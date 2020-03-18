<?php include 'header.php';?>

 <!DOCTYPE html>
<html>
<head>
	<title>Payment Process</title>
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
			
				<form action="b_connection.php" method="POST">
					<fieldset>
						<center><legend><b><u>Payment Process</u></b></legend></center><br><br>
						Client ID: <br> <input type="text" name="C_ID"> <br>
						Date: <br> <input type="text" name="B_Date"><br>
						<br>


						Payment Process:<br><select name="Payment_Process">
							  <option value="B_Kash">B_Kash</option>
							  <option value="Bank">Bank</option>
							  <option value="Cash">Cash</option>
							  
						</select>
					
						
						<br><br>

						Package:<br><select name="P_Name">
							  <option value="Silver">Silver</option>
							  <option value="Gold">Gold</option>
							  <option value="Dimond">Dimond</option>
							  <option value="Titenium">Titenium</option>
						</select><br><br>

						
						Amount:<br><select name="Amount">
							  <option value="500">500</option>
							  <option value="700">700</option>
							  <option value="1000">1000</option>
							  <option value="1500">1500</option>
						</select><br><br> 

						
						<center><button type="submit" >Submit</button></center>
					</fieldset>
				</form><br><br><br>
			
		</div>
	</div>

</body>

</html>

















<?php include 'footer.php';?>