<?php
	require 'database.php';

	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$result=$db->query("UPDATE reportholder SET Solved='1' WHERE Report_id='{$id}'");
		$result=$db->query("UPDATE reportholder SET In_Progress='0' WHERE Report_id='{$id}'");
		header("Location: reportDashboard.php");
	}
?>