<!DOCTYPE html>
<html>
<head>
  <title>About Me</title>
  <link rel="stylesheet" href="../css/master.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
</table>
<h4>Father's Name: Benozir Ahmed</h4>
<h4>Mother's Name: Amena Khatun</h4>
<h4>Present Address: 116/7 East Maniknagar, Mugdha, Dhaka-1203.</h4>
<h4>Parmanent Address: 116/7 East Maniknagar, Mugdha, Dhaka-1203.</h4>
<h4>Hobbies/Passion/Travelling: </h4>
<ul>
	<li>Sports   <!--Start Nested List-->
		<ul>
			<li>Cricket</li>
			<li>Football</li>
			<li>Badminton</li>
			<li>Basket Ball</li>
		</ul>
	</li> <!--End Nested Listing-->
	<li>Travelling</li>
	<li>Listening Music</li>
	<li>Digital Drawing</li>
</ul><br><br>
<h1>Education</h1>
<hr>
<br>
<?php
$education = array(
  "B.Sc" => array(
    "Institute" => "North South University",
    "Year" => "Pursuing",
    "Board" => "Dhaka",
    "GPA" => "2.93"
  ),
  "HSC/A-Level" => array(
      "Institute" => "Dhaka Imperial College",
      "Year" => "2016",
      "Board" => "Dhaka",
      "GPA" => "5.00"
    ),
    "SSC/O-Level" => array(
        "Institute" => "Ideal School and College",
        "Year" => "2016",
        "Board" => "Dhaka",
        "GPA" => "5.00"
      )
  );
 ?>
 <table align="center" width="80%" cellspacing="0" height="50">
     <?php
     foreach($education as $key => $value) {
       echo "<tr height='50'>";
       echo "<td align='center'>" . $key . "</td>";
       foreach ($value as $sub_key => $sub_val) {
         echo "<td align='center'>" . $sub_key . " = " . $sub_val . "</td>";
       }
       echo "</tr>";
     }
      ?>
 </table>
<br>
<br>
<div class="Social_Media_Links">
	<h4 class="mail">Email: sadman.ahmed163@northsouth.edu</h4>
	<a href="https://www.facebook.com/sadman.ahmed.official/" class="fa fa-facebook"></a>
	<a href="https://www.instagram.com/sadman.ahmed_/" class="fa fa-instagram"></a>
</div><br><br>
<footer>
  <hr>
  <div width="100%" align="center"> &copy; 2020 Sadman Ahmed. All Rights Reserved</div>
</footer>



</body>
</html>
