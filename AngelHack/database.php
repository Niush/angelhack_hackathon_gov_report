<?php
	$db=new mysqli('localhost', 'root', '' , 'peopleReports');
	if($db->connect_errno){
		echo "Error connecting to the database";
	}

	$result=$db->query("SELECT * FROM reportholder");
	$reports=$result->fetch_all(MYSQLI_ASSOC);
	

