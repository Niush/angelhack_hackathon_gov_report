<html>
	<head>
		<title>Admin Login</title>
		<meta charset="UTF-8">
	</head>
	<body>
	
	<?php
		if(isset($_GET['login'])){
		if(($_GET['login'])=='failed'){
			echo "<script>alert('Incorrect Login Details');</script>";	
			}
		}
	?>
		 <marquee>This is the login section for Admin.</marquee>

		 <h2 style="font-family: Verdana;text-align: center;">Admin Login</h2>
		<form action="adminLoginValidation.php" method="post">
			<div>
			<p>
				<label for="userName">Username *</label><br>
				<input placeholder="Please enter the valid username" type="text" id="userName" name="userName">

			</p>
		
			<p>
				<label for="password">Password *</label><br>
				<input type="password" id="password" name="password">
			</p>
			
			<p>
				<input type="submit" name="Login" value="Submit">

			</p>

		</form>

		<style>
			body{
				background-image: linear-gradient(to left, #cdcded,#efcdac);
			}

			form{
				padding:15px;
				background: #cdcdcd;
				background: rgba(200,200,210,0.5);
				box-shadow:1px 2px 5px gray;
				margin:10px 30%;
			}
			input{
				width:100%;
				height:35px;
			}

		</style>
		
	</body>
	</html>


		


			