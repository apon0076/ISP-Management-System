<?php include 'header.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
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
				<form action="authenticate.php" method="POST">
					<fieldset>
						<center><legend><b><u>Admin Login</u></b></legend></center><br><br>
						Admin ID:<br>  <input type="text" name="A_ID"> <br><br>

						Password:<br>  <input type="password" name="A_Password"><br><br><br>
						<center><button type="submit" >Login</button></center>
					</fieldset>
			</form>
		</div><br><br>
	</div>

</body>

</html>


<?php include 'footer.php';?> 