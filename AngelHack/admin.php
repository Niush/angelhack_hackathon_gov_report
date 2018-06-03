<?php
	require 'database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Dashboard</title>
</head>
<body>
	<h2>All Reports</h2>
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
				<th>Not_addressed</th>
				<th>Options</th>
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
				<td><?= $individual_report['Not_addressed']; ?></td>	
				<td>
					<a href="reportDashboard.php?id=<?= $individual_report['Report_id']; ?>">Add To Dashboard</a><br>
					<a href="solved.php?id=<?= $individual_report['Report_id']; ?>">Solved</a><br>
					<a href="delete.php?id=<?= $individual_report['Report_id']; ?>">Delete</a><br>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

	<style>
		body{
			position: relative;
			background-image: linear-gradient(to right,#efdfef,#dccdde,#cdeded,#cdfded);
		}
		table{
			transform: scale(0.8) translate(0,0);
			position: absolute;
			top:-55px;
			left:-110px;
		}

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

		a{
			border-bottom: 1px solid wheat;
			font-style: italic;
			font-family: Courier;
		    margin: 0px;
    		display: block;
			padding:0;
		}

	</style>

</body>
</html>