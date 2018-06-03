<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Report Problems to Nepal Government.">
	<meta name="keywords" content="Report,Nepal,Government,Problems">
	<meta name="author" content="Team 13 Phoenix">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="index.css">
	<style> <?php include 'index.css'; ?> </style>
	<title>Report Portal</title>
</head>
<?php
	include 'navbar/navbar.php';
?>

<div class="main">
	<h1>Report</h1>
	
	<div class="all">
		<!--<div class="title">Human Rights</div>-->
		<div class="boxes">
			<a href="report.php?type=child"><div class="box">Child Abuse</div></a>
			<a href="report.php?type=gender"><div class="box">Gender Violence</div></a>
			<a href="report.php?type=rights"><div class="box">Rights Violation</div></a>
			<a href="report.php?type=road"><div class="box">Road Issue</div></a>
			<a href="report.php?type=electricity"><div class="box">Electricity Issue</div></a>
			<a href="report.php?type=telephone"><div class="box">Telephone Issue</div></a>
			<a href="report.php?type=water"><div class="box">Drinking Water Issue</div></a>
			<a href="report.php?type=rubbish"><div class="box">Rubbish (Wastage)</div></a>
			<a href="report.php?type=corruption"><div class="box">Corruption</div></a>
			<a href="report.php?type=crime"><div class="box">Crime</div></a>
			<a href="report.php?type=discrimination"><div class="box">Discrimination</div></a>
			<a href="report.php?type=other"><div class="box">Other</div></a>
		</div>
	</div>
</div>

<?php
	if(isset($_GET['success'])){
		if($_GET['success'] == 'true'){
			echo "<script>alert('Problem Successfully Reported.')</script>";
		}
	}
?>

<?php
	include 'footer/footer.php';
?>