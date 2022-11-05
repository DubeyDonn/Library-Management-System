<?php

@include 'config.php';

session_start();

if (isset($_POST['submit'])) {

  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pass = md5($_POST['password']);
  $cpass = md5($_POST['cpassword']);
  $user_type = $_POST['user_type'];

  $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

  $result = mysqli_query($conn, $select);

  if (mysqli_num_rows($result) > 0) {

    $row = mysqli_fetch_array($result);

    if ($row['user_type'] == 'admin') {

      $_SESSION['admin_name'] = $row['name'];
      header('location:admin_page.php');

    } elseif ($row['user_type'] == 'user') {

      $_SESSION['user_name'] = $row['name'];
      header('location:user_page.php');

    }

  } else {
    $error[] = 'incorrect email or password!';
  }

}
;
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="style.css" />

</head>

<body>
  <div class="background">
    <div class="Login_box">
      <center>
        <h1 class="Title">LOGIN HERE</h1>
      </center>
      <?php
      if (isset($error)) {
        foreach ($error as $error) {
          echo '<span class="error-msg">' . $error . '</span>';
        }
        ;
      }
      ;
      ?>
      <br /><br /><br />

      <center>
        <div>
          <form method="POST" , action="#">
            <label>Username: </label>
            <input type="text" name="username" placeholder="ENTER YOUR USERNAME" id="username" />

            <br /><br />

            <label>Password: </label>
            <input type="password" name="password" placeholder="ENTER YOUR PASSWORD" id="password" />

            <br />
            <br /><br />

            <input class="click-login-btn" type="submit" name="" value="LOGIN" />
            <br />
            <br />

            <div>
              <small>Don't have an
                account?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</small>
              <a href="registration.php" <button>SIGN UP</button></a>
            </div>
            <br />

            <div>
              <small>Forgot your password?&nbsp; </small>
              <button>Reset Password</button>
            </div>
          </form>
        </div>
      </center>
    </div>
  </div>
</body>

</html>