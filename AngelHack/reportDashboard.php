<?php
	require 'database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>
</head>
<body>
	<?php
		include 'navbar/navbar.php';
	?>
	<?php
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$result=$db->query("UPDATE reportholder SET Not_addressed='0' WHERE Report_id='{$id}'");
		$result=$db->query("UPDATE reportholder SET In_Progress='1'  WHERE Report_id='{$id}'");
	}
	?>
	<h2>In Progress</h2>

	<?php
	$result=$db->query("SELECT * FROM reportholder WHERE In_progress=1");
	$reports=$result->fetch_all(MYSQLI_ASSOC);
	?>
	<table border="1px solid black">
		<thead>
			<tr>
				<th>Report ID</th>
				<th>Problem Type</th>
				<th>Reporter Name</th>
				<th>Address</th>
				<th>Email</th>
				<th>Gender</th>
				<th>Problem Description</th>
				<th>Pic/Video</th>
				<th>Latitude</th>
				<th>Longitude</th>
				<th>Solved</th>
				<th>In_Progress</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($reports as $individual_report): ?>
			<tr>
				<td><?= $individual_report['Report_id']; ?></td>	
				<td><?= $individual_report['Problem_Type']; ?></td>	
				<td><?= $individual_report['Reporter_Name']; ?></td>	
				<td><?= $individual_report['Address']; ?></td>	
				<td><?= $individual_report['Email']?></td>	
				<td><?= $individual_report['Gender']; ?></td>	
				<td><?= $individual_report['Problem_Description']; ?></td>	
				<td><a href="<?= $individual_report['Pic_Video']; ?>" target="_blank"><img src="<?= $individual_report['Pic_Video']; ?>" style="width:20%" /></a></td>	
				<td><?= round($individual_report['Latitude'],2); ?></td>	
				<td><?= round($individual_report['Longitude'],2); ?></td>
				<td><?= $individual_report['Solved']; ?></td>
				<td><?= $individual_report['In_progress']; ?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

	<h2>Solved</h2>

	<?php
	$result=$db->query("SELECT * FROM reportholder WHERE Solved=1");
	$reports=$result->fetch_all(MYSQLI_ASSOC);
	?>
	<table border="1px solid black">
		<thead>
			<tr>
				<th>Report ID</th>
				<th>Problem Type</th>
				<th>Reporter Name</th>
				<th>Address</th>
				<th>Email</th>
				<th>Gender</th>
				<th>Problem Description</th>
				<th>Pic/Video</th>
				<th>Latitude</th>
				<th>Longitude</th>
				<th>Solved</th>
				<th>In_Progress</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($reports as $individual_report): ?>
			<tr>
				<td><?= $individual_report['Report_id']; ?></td>	
				<td><?= $individual_report['Problem_Type']; ?></td>	
				<td><?= $individual_report['Reporter_Name']; ?></td>	
				<td><?= $individual_report['Address']; ?></td>	
				<td><?= $individual_report['Email']?></td>	
				<td><?= $individual_report['Gender']; ?></td>	
				<td><?= $individual_report['Problem_Description']; ?></td>	
				<td><?= $individual_report['Pic_Video']; ?></td>	
				<td><?= round($individual_report['Latitude'],2); ?></td>	
				<td><?= round($individual_report['Longitude'],2); ?></td>
				<td><?= $individual_report['Solved']; ?></td>
				<td><?= $individual_report['In_progress']; ?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

	<br><br><br><br>
	<?php
		include 'footer/footer.php';
	?>

	<style>
		h2{
			text-align: center;
			text-shadow: 0 2px 1px gray;
		}

		table{
			width:100%;
			border:none;
			font-family: Tahoma;
			text-align: center;
		}

		thead tr th{
			padding:8px;
			border: none;
			background:#545465;
			color:white;
		}

		tbody tr td{
			padding:8px;
			border: 1.5px solid teal;
		}



	</style>
</body>
</html>