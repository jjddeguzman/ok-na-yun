<!DOCTYPE html>
<html lang="en">
<head>
	<title>LPPWDFI PROFILING SYSTEM</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="gridstyle.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
	
<body>

	<div class="contain">
	<form action="./dashboardpopulation.html">
    <input type="submit" value="Back" />
	</form>
		<h1>LPPWDFI RECORDS</h1>
	<table id="response">
		<thead>
			<tr>
				<th>PWDID</th>
				<th>FirstName</th>
				<th>LastName</th>
				<th>MiddleName</th>
				<th>Age</th>
				<th>CivilStatus</th>
				<th>Religion</th>
				<th>Birthdate</th>
				<th>Gender</th>
				<th>Barangay</th>
				<th>HouseNo.</th>
				<th>Subdivision/Village</th>
				<th>City</th>
				<th>Phone/TelNo.</th>
				<th>Email</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$connection = new mysqli('localhost','root','','lppwdfi');

				if ($connection->connect_error) {
					die("Connection failed: " . $connection->connect_error);
				}

				$sql = "SELECT pwdid,fname,lname,mname,age,civilstatus,religion,dob,gender,barangay,housenost,subdvill,city,phoneno,email FROM personal_info;";

				$result = $connection->query($sql);

				if (!$result) {
					die("Invalid query: " . $connection->error);
				}

				while ($row = $result->fetch_assoc()) {
				echo "<tr>
				<td>" . $row["pwdid"] . "</td>
				<td>" . $row["fname"] . "</td>
				<td>" . $row["lname"] . "</td>
				<td>" . $row["mname"] . "</td>
				<td>" . $row["age"] . "</td>
				<td>" . $row["civilstatus"] . "</td>
				<td>" . $row["religion"] . "</td>
				<td>" . $row["dob"] . "</td>
				<td>" . $row["gender"] . "</td>
				<td>" . $row["barangay"] . "</td>
				<td>" . $row["housenost"] . "</td>
				<td>" . $row["subdvill"] . "</td>
				<td>" . $row["city"] . "</td>
				<td>" . $row["phoneno"] . "</td>
				<td>" . $row["email"] . "</td>	
				<td>
				<button class='btn btn-primary'>
				<a href='http://localhost/REG%20FORM/INDEX.php?' class='text-light' target='blank'>Add</button>
				<button class='btn btn-success'>
				<a href='http://localhost/REG%20FORM/update.php? updateid=$row[pwdid]' class='text-light'target='blank'>Update</button>
				</td>
				
				</tr>";
				
				}
			?>
			
			
		</tbody>
			
		
	</table>
	
	</div>
			</div>
</body>
</html>