<?php

session_start();
if(isset($_SESSION['username'])){
  header("location:admin/kasir.php");
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
  <body>
  <link rel="stylesheet" href="style.css"><br>

    <div class="container">
      <h2>Login</h2><br>
        <form action="awalan/ceklogin.php" method="post"> <br>

          <label for="username">Username:</label><br>
          <input type="text" id="username" name="username" value="" required><br>

          <label for="password">Password:</label><br>
          <input type="password" id="password" name="password" value="" required>

          <button type="submit" name="submit">Login</button>

        </form> <br>
        Don't Have an Account?
        <a href="awalan/register.php">Register</a>
    </div><br>

    

  </body>
</html>
