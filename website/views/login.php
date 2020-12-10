<!DOCTYPE html>
<?php
  session_start();
  if (isset($_COOKIE["cookieSet"])) {
    header("Location:dashboard.php");
  }
?>
<html>
<head>
	<title>login Page</title>
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
</table><br><br>
<div>
	<?php
  if (isset($_GET['error'])) {
    if($_GET['error'] == 'invalid_user'){
  	   echo "<h2 align='center'>Invalid username or Password</h2>";
  	 }
   }
?>
</div>
<div >
	<form action="../models/verify.php" method="post">
		<table class="table" align="center" width="20%" cellpadding="10"  >
			<tr>
				<td class="td"><label>Username:</label></td>
				<td class="td"><input type="text" name="uname"></td>
			</tr>
			<tr>
				<td class="td"><label>Password:</label></td>
				<td class="td"><input type="text" name="psw"></td>
			</tr>
			<tr>
				<td class="td"></td>
				<td class="td"><button type="submit" id="button" name="submit">Login</button></td>
			</tr>
			<br><br>
		</table>

	</form>
</div>
<br><br><br><br><br><br>
<a class="td"href="register.php">Registration</a><br><br><br><br><br>
<footer>
	<hr>
	<div width="100%" align="center"> &copy; 2020 Sadman Ahmed. All Rights Reserved</div>
</footer>
</body>
</html>
<?php
  session_destroy();
?>
