<?php
	require 'navbar/navbar.php';
?>
<html>
	<head>
		<title>Reporting Form</title>
		<meta charset="UTF-8">
	</head>
	<body>
		 <marquee>This is the report section. Please report which you might think should be reported.</marquee>


		 <?php
		 	if(isset($_GET['type'])){
		 		$problemType=$_GET['type'];
			 	if($problemType=='child'){
			 		echo "<h2>Child Abuse</h2>";
			 	}
			 	else if($problemType=='gender'){
			 		echo "<h2>Gender Violence</h2>";
			 	}
			 	else if($problemType=='rights'){
			 		echo "<h2>Rights Violation</h2>";
			 	}
			 	else if($problemType=='road'){
			 		echo "<h2>Road Problems</h2>";
			 	}
			 	else if($problemType=='electricity'){
			 		echo "<h2>Electricity Problems</h2>";
			 	}
			 	else if($problemType=='water'){
			 		echo "<h2>Drinking Water Problem</h2>";
			 	}
			 	else if($problemType=='telephone'){
			 		echo "<h2>Telephone Problem</h2>";
			 	}
			 	else if($problemType=='rubbish'){
			 		echo "<h2>Rubbish/Wastage Problem </h2>";
			 	}
			 	else if($problemType=='corruption'){
			 		echo "<h2>Corruption Problem</h2>";
			 	}
			 	else if($problemType=='crime'){
			 		echo "<h2>Crime</h2>";
			 	}
			 	else if($problemType=='discrimination'){
			 		echo "<h2>Discrimination Problem</h2>";
			 	}
			 	else if($problemType=='other'){
			 		echo "<h2>Other Problems</h2>";
			 	}
			 	else{
			 		header("Location: index.php?report=failed");
			 		die();
			 	}
		 	}else{
		 		header("Location: index.php?report=failed");
		 		die();		
		 	}
		 	
		 ?>
		<form action="insertIntoDatabase.php" method="post" enctype="multipart/form-data">
			<div class="inputs">
				<input type="hidden" value="<?= $_GET['type'] ?>" name="problemType">
				<label for="reporterName">Reporter Name</label><br>
				<input placeholder="Your Name" type="text" id="reporterName" name="reporterName" autocomplete="off"><br>

				<label for="address">Address</label><br>
				<input placeholder="Your address" type="text" id="address" name="address" autocomplete="off"><br>

				<label for="email">Email</label><br>
				<input placeholder="Your Email" type="text" id="email" name="email" autocomplete="off"><br>

				<label for="gender">Gender</label><br>
				<select name="gender">
				 	<option name="male">Male</option>
					<option name="female">Female</option>
					<option name="others">Others</option>
				</select><br>

				<label for="problemDescription">Problem Description *</label></br>
				<textarea placeholder="Briefly explain the problem." rows="15" cols="33" id="problemDescription" name="problemDescription" autocomplete="off" style="resize: none;"></textarea><br>

				<label for="pic_video">Photo/Video</label></br>
				<input type="file" id="pic_video" name="picVideo" accept="image/*,video/*"><br>

				<input id="lat" type="hidden" style="opacity:0;" name="lat">
				<input id="lng" type="hidden" style="opacity:0;" name="lng">

				<p class="latlng" id="latlng">Lat/Lng: </p>
				</div>

				<div class="map">
					<h4>Please pin the location where you want to report. *</h4> 
					<div id="googleMap" style="width:100%;height:400px;"></div>
				</div>


				<input type="submit" style="margin-left: 70px;width:90px; height:40px;background:teal;color:white;border-radius:15%;cursor: pointer; ">
				<br>
				<br>
		</form>

		<style>
			h2{
				font-family: Verdana;
				text-align: center;
			}

			form{
				width:100%;
				position: relative;
				margin:10px 0;
			}

			form .inputs{
				padding:20px;
				font-family: Verdana;
				margin-left: 50px;
			}

			input,textarea{
				border:2px solid teal;
			}

			label{
				display: inline-block;
    			padding: 20px 0 3px 0;	
			}

			form .inputs input{
				height:25px;
				width:250px;
			}

			form .map{
				float:right;
				position: absolute;
				right:100px;
				width:60%;
				top:20px;
			}
		</style>

		<script>
		function myMap() {
		var mapProp= {
		    center:new google.maps.LatLng(27.690048, 85.344197),
		    zoom:15,
		};
		var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

		var marked = false;
		var marker;
		google.maps.event.addListener(map, 'click', function(event){
			if(marked){
				marker.setMap(null);
			}
			marker = new google.maps.Marker({position: event.latLng, map: map});
			marked = true;
			var lat=event.latLng.lat();
			var lng=event.latLng.lng();
			document.getElementById("latlng").innerText = "Lat/Lng: " + lat + " / " + lng;
			document.getElementById("lat").value = lat;
			document.getElementById("lng").value = lng;
		});

		}
		</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIDHD4XUYmF1Ze0I0fafdYyf3DsaGaI0Q&callback=myMap"></script>

	</body>
	</html>
	<?php
	require 'footer/footer.php';
	?>