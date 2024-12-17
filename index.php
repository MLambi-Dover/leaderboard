<!DOCTYPE html> 
<html> 
	<head> 
		<meta http-equiv="refresh" content="30">
		<title>LeaderBoard Using PHP</title> 
	<style>
		.container {
			display: flex;
			flex-direction: column;
			align-items: center;
			align-content: center;
	</style>
	</head> 

	<body> 
<div class="container">
		<h1>Leaderboard</h1> 
	oh yeah
		<table> 
			<tr> 
				<td>Ranking</td> 
				<td>UserName</td> 
				<td>Marks</td> 
			</tr> 
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
marks FROM leaderboard ORDER BY marks DESC LIMIT 10"); 

/* First rank will be 1 and 
	second be 2 and so on */
$ranking = 1; 

/* Fetch Rows from the SQL query */
if (mysqli_num_rows($result)) { 
	while ($row = mysqli_fetch_array($result)) { 
		echo "<tr> <td>{$ranking}</td> 
		<td>{$row['userName']}</td> 
		<td>{$row['marks']}</td></tr>"; 
		$ranking++; 
	} 
} 
?> 
</table> 
</div>
</body> 
</html> 

