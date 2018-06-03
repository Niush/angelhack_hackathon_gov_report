<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../hackathon_1/navbar/navbar.css">
</head>
<body>
	<div class="top-navbar">
		<div class="Logo">
			<img src="images/logo.png"/>
		</div>
		
		<div class="top-subnav">
			<ul>
				<li><a href="../AngelHack/adminLogin.php"><div class="adminLoginButton">Login as Admin</div></a></li>
				<a href="about.php"><li>About</li></a>
				<a href="tel:00000000"><li>Contact</li></a>
				<li>&#2344;&#2375;&#2346;&#2366;&#2354;&#2368;  </li>
			</ul>
		</div>
	</div>
	
	<div class="bottom-navbar">
		<div class="bottom-subnav">
			<ul>
			<?php
				$file = basename($_SERVER['PHP_SELF']);
				if($file=='index.php'){
					echo '<li class="current">Home</li>';
				}else{
					echo '<a href="index.php"><li>Home</li></a>';
				}
				
				if($file=='report.php'){
					echo '<li class="current">Report</li>';
				}else{
					echo '<a href="reportDashboard.php"><li>Report</li></a>';
				}
				
			?>
				<li>News</li>
				<a href="anonMeeting.php"><li>Anon Meeting</li></a>
			</ul>
		</div>
	</div>
	
	<div class="bottom-navbar-mobile">
		<div class="bottom-subnav-mobile">
			<ul>
				<li>Home</li>
				<li>Report</li>
				<li>News</li>
				<a href="anonMeeting.php"><li>Anon Meeting</li></a>
			</ul>
		</div>
	</div>
</body>
</html>