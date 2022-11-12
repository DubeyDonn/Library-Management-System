<?php

@include 'config.php';

if (isset($_POST['submit'])) {

  $name = mysqli_real_escape_string($loginconn, $_POST['name']);
  $email = mysqli_real_escape_string($loginconn, $_POST['email']);
  $pass = md5($_POST['password']);
  $cpass = md5($_POST['cpassword']);
  $user_type = $_POST['user_type'];

  $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

  $result = mysqli_query($loginconn, $select);

  if (mysqli_num_rows($result) > 0) {

    $error[] = 'user already exist!';

  } else {

    if ($pass != $cpass) {
      $error[] = 'password not matched!';
    } else {
      $insert = "INSERT INTO user_form(name, email, password) VALUES('$name','$email','$pass','$user_type')";
      mysqli_query($loginconn, $insert);
      header('location:login_form.php');
    }
  }

}
;


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>register form</title>


  <link rel="stylesheet" href="style.css">

</head>

<body>

  <div class="form-container">

    <form action="" method="post">
      <h3>add person</h3>
      <?php
      if (isset($error)) {
        foreach ($error as $error) {
          echo '<span class="error-msg">' . $error . '</span>';
        }
        ;
      }
      ;
      ?>
      <input type="text" name="name" required placeholder="enter your name">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <select name="user_type">
        <option value="user">user</option>
        <option value="admin">admin</option>
      </select>
      <input type="submit" name="submit" value="Add Person" class="form-btn">
      <p><a href="admin_page.php">Back</a></p>
      </p>

    </form>

  </div>

</body>

</html>