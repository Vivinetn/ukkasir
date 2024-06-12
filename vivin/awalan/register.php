<?php
require 'tambah.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
</head>
<body>
<link rel="stylesheet" href="../style.css"><br>
    <div class="container">
        <h2>Register</h2><br>
            <form action="tambah.php" method="POST">
                <!-- username -->
                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username" value="" required><br><br>

                <!-- Password -->
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" value="" required><br><br>

                <!-- Email -->
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" value="" required><br><br>

                <!-- Role -->
                <label for="role">Role:</label><br>

                <input type="radio" id="user" name="role" value="user">
                <label for="user">User</label><br>

                <input type="radio" id="admin" name="role" value="admin">
                <label for="admin">Admin</label><br>

                <input type="radio" id="petugas" name="role" value="petugas">
                <label for="petugas">Petugas</label><br><br>

                <button input type="submit" name="submit" value="submit"> Register<br> </button>
            </form> <br>
            Already Have an Account?
        <a href="../index.php">
        Login
        </a> <br><br>
    </div>

</body>
</html>