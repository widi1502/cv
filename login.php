<?php
session_start();
include_once('conn.php');

if(isset($_POST['submit'])){
  $email = $_POST['user'];
  $password = $_POST['password'];
  $result = mysqli_query($conn, "SELECT * FROM cv_login WHERE username = '$email' OR email = '$email'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row["password"]){
      $_SESSION["login"] = true;
      header("Location: edit.php");
    }else{
      echo "<script> alert('kata sandi yang anda masukkan salah'); </script>";
    }
  }else{
    echo "<script> alert('email yang anda masukkan salah'); </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
  <div class="con-log">
    <h2>Login</h2>
    <form method="post" autocomplete="off">
      <label for="user">Username</label>
      <input type="text" name="user" id="user">
      <label for="password">Password</label>
      <input type="text" name="password" id="password">
      <button type="submit" name="submit">Login</button>
    </form>
  </div>
</body>
</html>