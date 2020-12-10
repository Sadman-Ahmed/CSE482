
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Me</title>
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
<div>
  <?php
  if (isset($_GET['success'])) {
    if($_GET['success'] == 'valid_user'){
       echo "<h2 align='center'> Your comment has been successfully noted. we will cantact with you soon</h2>";
     }
   }
?>
</div>
<form class="" action="../models/contactverify.php" method="post">
  <table class="table" align="center" width="20%" cellpadding="10">
    <tr>
      <td class="td" ><label>Name:</label></td>
      <td class="td" ><input type="text" name="name"></td>
    </tr>
    <tr>
      <td class="td" ><label>Email:</label></td>
      <td class="td" ><input type="text" name="email"></td>
    </tr>
    <tr>
      <td class="td" ><label>Comment:</label></td>
      <td  class="td" rowspan="3"><textarea cols="19.5" rows="5" name="comment"></textarea></td>
    </tr>
    <tr>
      <td class="td"></td>
    </tr>
    <tr>
      <td class="td"></td>
    </tr>
    <tr>
      <td class="td"></td>
      <td class="td"><button type="submit" name="button" id="button">Submit</button></td>
    </tr>
  </table>
</form>
<br><br><br><br><br>
<footer>
	<hr>
	<div width="100%" align="center"> &copy; 2020 Sadman Ahmed. All Rights Reserved</div>
</footer>
</body>
</html>
