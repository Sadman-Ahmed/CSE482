<?php
include_once("../models/connection.php");

$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$sql = "INSERT INTO `contact`(`name`, `email`, `comment`) VALUES ('$name','$email','$comment')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
header("Location: ../views/contact.php?success=valid_user");


 ?>
