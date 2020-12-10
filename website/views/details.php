<!DOCTYPE html>
<html>
<head>
	<title>Details Page</title>
	<title>login Page</title>
	<link rel="stylesheet" href="../css/master.css">
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
</table><br><br>
<form class="" action="register.php" method="post">
	<table class="table" align="center" width="50%" cellpadding="10">
		<tr>
			<td class="td"><label>Name:</label></td>
			<td class="td" ><?php echo $_POST['name'];?></td>
		</tr>
		<tr>
			<td class="td"><label>Username:</label></td>
			<td class="td" ><?php echo $_POST['uname'];?></td>
		</tr>
		<tr>
			<td class="td"><label>Password:</label></td>
			<td class="td" ><?php echo $_POST['psw'];?></td>
		</tr>
		<tr>
			<td class="td"><label>Gender:</label></td>
			<td class="td" >
				<?php
				if(isset($_POST['gender'])){
					echo $_POST['gender'];
				}
				else{
					echo "any one must be selected";
				}

				?>
			</td>

		</tr>
		<tr height="50px">
			<td class="td"><label>Programming Skils:</label></td>
			<td class="td" >

				<?php
				if (isset($_POST['Java']) || isset($_POST['Android']) || isset($_POST['Ruby'])|| isset($_POST['Net'])){
					if (isset($_POST['Java'])) {
						$Java = $_POST['Java'];
						echo $Java."<br>";
					}
					if (isset($_POST['Android'])){
						$Android = $_POST['Android'];
						echo $Android."<br>";
					}
					if (isset($_POST['Ruby'])){
						$Ruby = $_POST['Ruby'];
						echo $Ruby."<br>";
					}
					if (isset($_POST['Net'])){
						$Net = $_POST['Net'];
						echo $Net."<br>";
					}

				}
				else{
					if (isset($_POST['submit'])) {
						echo "any one must be selected";
					}
				}
			?>
			</td>
		</tr>
		<tr>
			<td class="td"><label>Contact no:</label></td>
			<td class="td" ><?php echo $_POST['number'];?></td>
		</tr>
		<tr>
			<td class="td"><label>Email:</label></td>
			<td class="td" ><?php echo $_POST['email'];?></td>
		</tr>
		<tr>
			<td class="td"><label>College:</label></td>
			<td class="td" ><?php echo $_POST['college'];?></td>
		</tr>
		<tr>
			<td class="td"></td>
			<td class="td"><button id="button">Go Back</button></td>

		</tr>

	</table>

</form>

<br><br>

<footer>
	<hr>
	<div width="100%" align="center"> &copy; 2020 Sadman Ahmed. All Rights Reserved</div>
</footer>

</body>
</html>
