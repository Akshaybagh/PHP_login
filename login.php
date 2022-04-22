<!DOCTYPE html>
<?php include('server.php');
?>
<html>
<head>
  <title>USER REGISTRATION SYSTEM USING PHP AND MY SQL</title>
  <link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
  <div class="header">
       <h2>LOGIN</h2>
    </div>
    <form method="post" action="login.php">
      <div class="input-group">
        <label>USERNAME</label>
        <input type="text" name="username">
      </div>
      <div class="input-group">
        <label>PASSWORD</label>
        <input type="password" name="PASSWORD">
      </div>
      <div class="input-group">
      <input type="submit" name="submit" value="login">
      </div>
      <p>
        Not yet a member? <a href="register.php">sign up</a></p>
    </form>
  </body>
  </html>
