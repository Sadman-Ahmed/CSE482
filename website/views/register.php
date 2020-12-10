<!DOCTYPE html>
<html>
<head>
	<title>Register Page</title>
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
	if (isset($_GET['success'])) {
		if($_GET['success'] == 'valid_user'){
			 echo "<h2 align='center'>Registration successfull. Now you can LogIn</h2>";
		 }
	 }
?>
</div>

<form class="" action="../models/regverify.php" method="POST">
	<table class="table" align="center" width="50%" cellpadding="10">
	  <tr>
	    <td class="td"><label>Name:</label></td>
	    <td class="td" ><input type="text" name="name" id="name" required></td>
	  </tr>
	  <tr>
	    <td class="td"><label>Username:</label></td>
	    <td class="td"><input type="text" name="uname" required></td>
	  </tr>
	  <tr>
	    <td class="td"><label>Password:</label></td>
	    <td class="td"><input type="password" name="psw" required></td>
	  </tr>
	  <tr>
	    <td class="td"><label>Re-Type Password:</label></td>
	    <td class="td"><input type="password" required></td>
	  </tr>
	  <tr>
	    <td class="td"><label>Gender:</label></td>
	    <td class="td">
	      <input value="Male" type="radio" name="gender">
	      <label>Male</label>
	      <input  value="Female" type="radio" name="gender">
	      <label>Female</label>
	      <input value="Other" type="radio" name="gender">
	      <label>Other</label>
	    </td>
	  </tr>
	  <tr height="50px">
	    <td class="td"><label>Programming Skils:</label></td>
	    <td class="td">
	      <input type="checkbox" name="Java" value="Java">
	      <label> Java</label>
	      <input type="checkbox" name="Android" value="Android">
	      <label> Android</label>
	      <input type="checkbox" name="Ruby" value="Ruby">
	      <label> Ruby</label>
	      <input type="checkbox" name="Net" value=".Net">
	      <label>.Net</label><br><br>
	    </td>
	  </tr>
	  <tr>
	    <td class="td"><label>Contact no:</label></td>
	    <td class="td"><input type="number" name="number" required></td>
	  </tr>
	  <tr>
	    <td class="td"><label>Email:</label></td>
	    <td class="td"><input type="text" name="email" required></td>
	  </tr>
	  <tr>
	    <td class="td"><label>College:</label></td>
	    <td class="td">
	      <select name="college">
	        <option value="Nothing is selected">Select a college</option>
	        <option value="a">a</option>
	        <option value="b">b</option>
	        <option value="c">c</option>
	      </select>
	    </td>
	  </tr>
	  <tr>
	    <td class="td"></td>
	    <td class="td"><button name="submit" type="submit" id="button">Submit</button></td>
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
