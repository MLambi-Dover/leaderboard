<!DOCTYPE html> 
<html> 
	<head> 
		<meta http-equiv="refresh" content="10">
		<title>LeaderBoard Using PHP</title> 
		<link rel="stylesheet" href="./reset.css">
		<link rel="stylesheet" href="./style.css">

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head> 

	<body> 
<div class="container">
		<h2>Holiday Light Leaderboard</h2> 
		<table>
			<thead>

			<tr> 
					<th>Ranking</th> 
					<th>Name</th> 
					<th>Time/sec</th> 
			</tr> 
			</thead>
			<tbody>
<?php 

/* Connection Variable ("Servername", 
"username","password","database") */
$con = mysqli_connect("localhost", 
		"hrlvesmy_leaderboard",
		"O6,&*7Y(oCy{",
		"hrlvesmy_leaderboard"); 

/* Mysqli query to fetch rows 
in descending order of marks */
$result = mysqli_query($con, "SELECT userName, 
marks FROM leaderboard ORDER BY marks ASC LIMIT 10"); 

/* First rank will be 1 and 
	second be 2 and so on */
$ranking = 1; 

/* Fetch Rows from the SQL query */
if (mysqli_num_rows($result)) { 
	while ($row = mysqli_fetch_array($result)) { 
			if ($ranking == 1) {
				echo "<tr id='first'> <td>{$ranking}</td> 
				<td>{$row['userName']}</td> 
				<td>{$row['marks']}</td></tr>"; 
				$ranking++;
			} elseif ($ranking == 2) {
				echo "<tr id='second'> <td>{$ranking}</td> 
				<td>{$row['userName']}</td> 
				<td>{$row['marks']}</td></tr>"; 
				$ranking++;
			} elseif ($ranking == 3) {
				echo "<tr id='third'> <td>{$ranking}</td> 
				<td>{$row['userName']}</td> 
				<td>{$row['marks']}</td></tr>"; 
				$ranking++;
			} else {
				echo "<tr> <td>{$ranking}</td> 
				<td>{$row['userName']}</td> 
				<td>{$row['marks']}</td></tr>"; 
				$ranking++; 
			}
	} 
} 
?> 
</tbody>
</table> 
</div>
</body> 
</html> 

