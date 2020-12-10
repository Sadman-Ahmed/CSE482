<?php
include_once("../models/connection.php");
$name = $_POST['name'];
$uname = $_POST['uname'];
$password = $_POST['psw'];
$gender = $_POST['gender'];
$skill = "Java";
$contact = $_POST['number'];
$email = $_POST['email'];
$college = $_POST['college'];

$sql = "INSERT INTO user (`name`, `uname`, `password`, `gender`, `skills`, `contact`, `email`, `college`)
VALUES ('$name','$uname','$password','$gender','$skill','$contact','$email','$college')";
if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
header("Location: ../views/register.php?success=valid_user");
 ?>
