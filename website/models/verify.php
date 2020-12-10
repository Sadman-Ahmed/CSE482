<?php
include_once("../models/connection.php");
session_start();
if(isset($_POST['submit'])){
  $username = $_POST['uname'];
  $password = $_POST['psw'];
  $query = "SELECT * FROM user WHERE uname = '$username' AND password = '$password'";
  $result = mysqli_query($conn, $query);

  if ($result == NULL) {
    header('location: ../views/login.php?error=invalid_user');
  }
  else{
    header('location: ../views/login.php?error=invalid_user');

    if(empty($username) || empty($password)){
      header('location: ../views/login.php?error=invalid_user');
    }
    else{
      while($row = mysqli_fetch_assoc($result) ){

          $Cuname     = $row['uname'];
          $Cpassword = $row['password'];

          if(($username == $Cuname) && ($password == $Cpassword)){
            setcookie("cookieSet", "YES", time() + (86400 * 60), "/");
            header('location: ../views/dashboard.php');
          }
          else{
            header('location: ../views/login.php?error=invalid_user');
          }
        }
      }
  }
}
?>
