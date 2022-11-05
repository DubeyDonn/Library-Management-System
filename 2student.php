<?php

$host="localhost";
$user="root";
$password="";
$db="demo";
mysql_connect($host,$user,$password);
mysql_select_db($db);




?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Student/Teacher Login</title>
    <link rel="stylesheet" href="style.css" />
    <script src="login2.js"></script>
  </head>
  <body>
    <div class="background">
      <div class="Login_box">
        <center><h1 class="Title">USER LOGIN</h1></center>
        <br /><br /><br />

        <center>
          <div>
            <form method="POST", action="#">
              <label>Username: </label>
              <input
                type="text"
                name=""
                placeholder="ENTER YOUR USERNAME"
                id="username"
              />

              <br /><br />

              <label>Password: </label>
              <input
                type="password"
                name=""
                placeholder="ENTER YOUR PASSWORD"
                id="password"
              />

              <br />
              <br /><br />

              <input
                class="click-login-btn"
                type="submit"
                name=""
                value="LOGIN"
                onclick="validate()"
              />
              <br />
              <br />

              <div>
                <small
                  >Don't have an
                  account?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</small
                >
                <button>SIGN UP</button>
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
