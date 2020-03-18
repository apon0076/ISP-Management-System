<?php include 'adminheader.php';?>   
<!DOCTYPE html>
<html>
<head>
	<title>Add Package</title>
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
			
				<form action="package_declaration_connection.php" method="POST">
					<fieldset>
						<center><legend><b><u>Add Package</u></b></legend></center><br><br>
						
						Package Name: <br> <input type="text" name="P_Name"> <br>
						Cost: <br> <input type="text" name="Cost"><br>
						Speed: <br> <input type="text" name="Speed"><br>
						Declaraion Date: <br> <input type="text" name="P_Date"><br><br>

						
						
					
						
						<br><br>
						<center><button type="submit" >Submit</button></center>
					</fieldset>
				</form><br><br><br>
			
		</div>
	</div>

</body>

</html>


<?php

 include 'footer.php';?> 