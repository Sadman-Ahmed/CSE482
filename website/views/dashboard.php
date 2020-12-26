<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Page</title>
	<link rel="stylesheet" href="../assets/css/master.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
  <script>
  function usersearchTxt(str){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
      if(this.readyState == 4 && this.status == 200){
        document.getElementById('searchTxt').innerHTML = this.responseText;
      }
    }
    xmlhttp.open("GET","../models/search.php?search="+str,true);
    xmlhttp.send();

  }
  </script>
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
<table class="table" align="right">
    <td class="td">
      <label>Search here</label>
      <input id="searchBox" type="text" placeholder="Search Here" onkeyup="usersearchTxt(document.getElementById('searchBox').value);">
    </td>
  </tr>
</table>
<div id="searchTxt">
<?php
include '../models/search.php';
echo fetch('');
?>
<br><br>
<footer>
	<hr>
	<div width="100%" align="center"> &copy; 2020 Sadman Ahmed. All Rights Reserved</div>
</footer>
</body>
</html>
