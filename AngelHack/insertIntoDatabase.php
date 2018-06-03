<?php
	require 'database.php';

	$problemType=isset($_POST['problemType']) && !empty(trim($_POST['problemType'])) ? htmlspecialchars(trim($_POST['problemType'])):null;
	$reporterName=isset($_POST['reporterName']) && !empty(trim($_POST['reporterName'])) ? htmlspecialchars(trim($_POST['reporterName'])):null;
	$address=isset($_POST['address']) && !empty(trim($_POST['address'])) ? htmlspecialchars(trim($_POST['address'])):null;
	$email=isset($_POST['email']) && !empty(trim($_POST['email'])) ? htmlspecialchars(trim($_POST['email'])):null;
	$gender=isset($_POST['gender']) && !empty(trim($_POST['gender'])) ? htmlspecialchars(trim($_POST['gender'])):null;
	$description=isset($_POST['problemDescription']) && !empty(trim($_POST['problemDescription'])) ? htmlspecialchars(trim($_POST['problemDescription'])):null;
	//$file = isset($_FILES['picVideo']) ? $_FILES['picVideo']:null;
	//$fileName = rand(1,5).rand(0,200).$file['name'];
	//$file = $_FILES['picVideo'];
	/*echo "<pre>",var_dump($_FILES['picVideo']),"</pre>";
	die();*/

	if(isset($_POST['lat']) && isset($_POST['lng'])){
		if($_POST['lat']!="" && $_POST['lng']!=""){
			$lat=$_POST['lat'];
			$lng=$_POST['lng'];
		}else{
			header("Location: report.php?type=".$problemType."&location=false");
			die();
		}
	}else{
		header("Location: report.php?type=".$problemType."&location=false");
		die();
	}
	
	
	if($description == ""){
		//echo $db->error;
		header('Location:report.php?type='.$problemType);
		die();
	}

	/*if($file===null){
		$path = null;
	}else{
		$path = "uploads/" . basename($fileName);
	}

	if ($file!=null && move_uploaded_file($file['tmp_name'], $path)) {
	    // Move succeed.
	} else {
	    // Move failed. Possible duplicate?
	    echo "No Photo Uploaded";
	}*/

	 if($_FILES['picVideo']['error'] != 4)
	  {
	    $path = "uploads/";
	    $path = $path . basename( rand(0,1000) . $_FILES['picVideo']['name']);
	    if(move_uploaded_file($_FILES['picVideo']['tmp_name'], $path)) {
	      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
	      " has been uploaded";
	    } else{
	        echo "There was an error uploading the file, please try again!";
	    }
	  }

	$result=$db->query("INSERT INTO reportholder(Problem_Type,Reporter_Name, Address, Email, Gender, Problem_Description,Pic_Video,Latitude,Longitude) VALUES ('${problemType}','${reporterName}','${address}','${email}','${gender}','${description}','${path}','${lat}','${lng}')");
		

	if (!$result){
		echo $db->error;
		echo "Could not save the data";
	}else{
		header ('location: index.php?success=true');
	}






