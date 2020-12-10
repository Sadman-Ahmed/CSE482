<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Page</title>
	<link rel="stylesheet" href="../assets/css/master.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
</head>
<body>
	<h1>Sadman Ahmed</h1>
	<table width="100%" cellspacing="0" height="50">
		<tr>
			<td align="center"><a href="home.php">Home</a></td>
	    	<td align="center"><a href="about.php">about</a></td>
	    	<td align="center"><a href="contact.php">contact</a></td>
	    	<td align="center"><a href="login.php">login</a></td>
		</tr>
</table><br><br><br><br><br>
<div >
<h1 align="center">You Are Logged In</h1>
<?php
include_once("../models/connection.php");

$sql = "SELECT * FROM contact";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	echo "<table align='center' cellspacing='0'>";
	echo "<tr>
	<td>Name</td>
	<td>Email</td>
	<td>Comment</td>
	</tr>";
	while($row = mysqli_fetch_assoc($result)) {
		echo "<tr>";
		echo "<td>";
			echo $row["name"];
		echo "</td>";
		echo "<td>";
			 echo $row["email"];
		echo "</td>";
		echo "<td>";
			echo  $row["comment"];
		echo "</td>";
		echo "</tr>";
	}
	echo "</table>";
} else {
	echo "0 results";
}
mysqli_close($conn);
 ?>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br>
<footer>
	<hr>
	<div width="100%" align="center"> &copy; 2020 Sadman Ahmed. All Rights Reserved</div>
</footer>
</body>
</html>
