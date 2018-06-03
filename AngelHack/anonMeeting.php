<!doctype html>
<html>
	<head>
		<title>Anonymous Form</title>
		<meta charset="UTF-8">
	</head>
	<body>
			<?php
				include 'navbar/navbar.php';
			?>
		 <marquee>This is the form section for the anonymity. Please do not share any personal information here.</marquee>
			<div style="margin-top: 10px;margin:0px auto;height: 100%; width: 30%;">
			<p>
				<label for="name">Name *</label><br>
				<input placeholder="Please enter your name" type="text" id="name" name="name" autocomplete="off">

			</p>
			<p>
				<label for="address">Address *</label><br>
				<input placeholder="Please enter your address"type="text" id="address" name="address" autocomplete="off">
			</p>
			<p>
				<label for="email">Email *</label><br>
				<input placeholder="Please enter your Email"type="text" id="email" name="email" autocomplete="off">

			</p>
			<p>
				<label for="whyWrite">Why do you want to write this?</label></br>
				<textarea placeholder="Please briefly describe your reason for the case."rows="15" cols="40" id="subject" name="whyWrite" autocomplete="off"></textarea>
				</textarea>
			</p>

			<p>
				<label for="toWhom">Person you want to write for </label></br>
				<textarea placeholder="Please mention the person you want to write for."rows="15" cols="40" id="body" name="toWhom" autocomplete="off"></textarea>
				</textarea>
			</p>

			<p>
				<button onclick="pleasemail()">Mail Us</button>
			</p>

		</div>

		<?php
			include 'footer/footer.php';
		?>

		<style>
			
			input,textarea{
				width:75%;
				border:2px solid teal;
			}

			input{
				height: 25px;
			}

			button{
				width:80px;
				height:40px;
				background: teal;
				border-radius: 10%;
				color:white;
			}

		</style>

		<script type="text/javascript">
			function pleasemail(){
				location.href = "mailto:samipgov_gov@gov.np?subject=" + document.getElementById("subject").textContent + "&body=" + document.getElementById("body").textContent + "&cc=" + document.getElementById("email").textContent;
			}
		</script>

	</body>
	</html>


		


