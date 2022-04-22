<?php
$servername ="localhost";
$username="root";
$password ="";
$db="reg";
$errors =array();

//connect to the database
$conn = mysqli_connect('localhost', 'root','', 'reg');
//check connection
if (!$conn){
  die("database connection failed:".mysqli_connect_error());
}
echo "connected successfully";
//if the register button is clicked
if (isset($_POST['register'])) {
  $username = $MySQL_real_escape_strings($_POST['username']);
  $email = $MySQL_real_escape_strings($_POST['email']);
  $password_1 = $MySQL_real_escape_strings($_POST['password_1']);
  $password_2 = $MySQL_real_escape_strings($_POST['password_2']);
  //ensure that form fields are filled properly
  if(empty($username)) {
    array_push($errors, "username is required");
  }
  if(empty($email) {
    array_push($errors, "email is required");
  }
  if(empty($password_1)) {
    array_push($errors, "password is required");
  }
  if($password_1 != $password_2) {
    array_push($errors, "the passwords do not match");
  }
  //if there are no errors then save user to the database
  if(count($errors)==0){
    $password = md5($password_1); //encrypt password before storing in data base(security)
    $sql = "INSERT INTO users (username, email, password)
            VALUES ('$username', '$email','$password')";
    mysqli_query($db, $sql);
    $_se['username'] = $username;
    $_SESSION['success'] = "you are now logged in";
  }
}
?>
