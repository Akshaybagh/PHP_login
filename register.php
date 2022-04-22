<!DOCTYPE html>
<<?php include('server.php'); ?>
<html>
<head>
  <title>USER REGISTRATION SYSTEM USING PHP AND MY SQL</title>
  <link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
  <div class="header">
       <h2>REGISTER</h2>
    </div>
    <form method="post" action="register.php">
      <div class="input-group">
        <label>USERNAME</label>
        <input type="text" name="username">
      </div>
      <div class="input-group">
        <label>Email</label>
        <input type="text" name="Email">
      </div>
      <div class="input-group">
        <label>PASSWORD</label>
        <input type="password" name="PASSWORD">
      </div>
      <div class="input-group">
        <label>CONFIRM PASSWORD</label>
        <input type="password" name="PASSWORD_2">
      </div>
      <div class="input-group">
        <button type="submit" class="registerbtn">Register</button>
      </div>
      <p>
        Already a member? <a href="login.php">sign in</a>
    </form>
  </body>
  </html

