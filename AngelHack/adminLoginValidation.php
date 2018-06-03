<?php
	require 'database.php';

	$username=$_POST['userName'];
	$password=MD5($_POST['password']);

	$result=$db->query("SELECT * FROM loginauthentication");
	$queryResult=$result->fetch_assoc();

	

	$actualUserName=$queryResult['Username'];
	$correctPassword=$queryResult['Password'];

	if($username==$actualUserName && $password==$correctPassword){
		header ('Location:admin.php');
	}
	else{
		//echo "<script>alert('Invalid Login Details');</script>";
		header('Location:adminLogin.php?login=failed');
		//die();
	}

	