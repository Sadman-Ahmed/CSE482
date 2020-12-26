<!DOCTYPE html>
<html>
<head>
	<title>Register Page</title>
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

<form name="regform" action="../models/regverify.php" method="POST" onsubmit="return formValidation();">
	<table class="table" align="center" width="50%" cellpadding="10">
	  <tr>
	    <td class="td"><label>Name:</label></td>
	    <td class="td" ><input type="text" name="name" id="name"><label class="label" id="nameError"></label></td>
	  </tr>
	  <tr>
	    <td class="td"><label>Username:</label></td>
	    <td class="td"><input type="text" name="uname"><label id="usernameError"></label></td>
	  </tr>
	  <tr>
	    <td class="td"><label>Password:</label></td>
	    <td class="td"><input type="password" name="psw" ><label id="passwordError"></label></td>
	  </tr>
	  <tr>
	    <td class="td"><label>Re-Type Password:</label></td>
	    <td class="td"><input type="password" name = "repsw"><label id="repasswordError"></label></td>
	  </tr>
	  <tr>
	    <td class="td"><label>Gender:</label></td>
	    <td class="td">
	      <input value="Male" type="radio" name="gender">
	      <label>Male</label>
	      <input  value="Female" type="radio" name="gender">
	      <label>Female</label>
	      <input value="Other" type="radio" name="gender">
	      <label>Other</label><br><brz><label id="genderError"></label>

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
	    <td class="td"><input type="text" name="number"><label id="contactError"></label></td>
	  </tr>
	  <tr>
	    <td class="td"><label>Email:</label></td>
	    <td class="td"><input type="text" name="email"></td>
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
<script type="text/javascript">

function formValidation(){
	var name = document.forms["regform"]["name"].value;
	var uname = document.forms["regform"]["uname"].value;
	var password = document.forms["regform"]["psw"].value;
	var repassword = document.forms["regform"]["repsw"].value;
	var gender = document.forms["regform"]["gender"].value;
	var contact = document.forms["regform"]["number"].value;
	var flag = true;

	//name validation

	if(name == ''){
		document.getElementById('nameError').innerHTML = "Name cannot be empty";
		flag = false;
	}

	//username validation

	if(uname == ''){
		document.getElementById('usernameError').innerHTML = "Username cannot be empty";
		flag = false;
	}

	for(var i = 0; i< uname.length; i++){
		if(uname[i] == ' '){
			document.getElementById('usernameError').innerHTML = "Username cannot contain whitespace";
			flag = false;
			break;
		}
		else{
			continue;
		}
	}

	//password validation

	var length = password.length;
	if(length <8 || length>32){
		document.getElementById('passwordError').innerHTML = "Password length must be between 8-32 characters";
		flag = false;
	}

	//password match

	if(password != repassword){
		document.getElementById('repasswordError').innerHTML = "Passwords donot match";
		flag = false;
	}

	//gender validation

	if(gender == ''){
		document.getElementById('genderError').innerHTML = "Gender is not selected";
		flag = false;
	}

	//contact validation

	if(contact == ''){
		document.getElementById('contactError').innerHTML = "Contact cannot be empty";
		flag = false;

	}
	for(var i = 0; i< contact.length; i++){
		if(contact[i] == '0' || contact[i] == '1'
			||contact[i] == '2'
			||contact[i] == '3'
			||contact[i] == '4'
			||contact[i] == '5'
			||contact[i] == '6'
			||contact[i] == '7'
			||contact[i] == '8'
			||contact[i] == '9'){
			continue;
		}
		else{
			document.getElementById('contactError').innerHTML = "Contact can only contain numbers";
			flag = false;
			break;
		}
	}
	return flag;
}

</script>
</html>
