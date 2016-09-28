<html>
<head>
	<title>Clear Walk Through</title>
	<link href="cwtstyle.css" type="text/css" rel="stylesheet" />
	<link href="favicon.ico" type="image/gif" rel="icon" />
</head>

<body>
<div class="wrapper">
<div class="header">
	<img src="images/CWT-banner.png" />	
</div> <!-- header -->

<div class="content">
	<div class="loginformlayout">
	<form method="POST" action="login_check.php">
		<label> User Name: 
		</label>
		<input id="username" name="username"> 
		</input> <br>
		<label> Password: 
		</label>
		<input id="password" name="password">  <!-- this needs to be encrypted on Submit -->
		</input> <br>
		<label> </label>
		<input type="submit" value="Login">
	</form>
	</div> <!-- loginformlayout -->

	<div class="loginoptionlayout">
		<label> Don't have an account?
		</label>
			<div class="columnright"> <a href="signup.php"> Click here to sign up </a>
			</div> <br>
		<label> Trouble logging in? 
		</label>
			<div class="columnright"> <a href="retrieve_un.php"> Forgot user name </a>
			</div> <br>
		<label> </label>
			<div class="columnright">
				<a href="retrieve_pw.php"> Forgot password </a>
			</div>
	</div> <!-- loginoptionlayout -->
</div>  <!-- content -->

	<div class="footer">
		<?php require_once "footer.php" 
		?>
	</div>  <!-- footer -->
</div>  <!-- wrapper -->
</body>
</html>