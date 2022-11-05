<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['user_name'])) {
     header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html>

<head>
     <title>Student Homepage</title>
</head>

<body>
     <center>
          <h1><u>STUDENT/TEACHER<span>
                         <?php echo $_SESSION['user_name'] ?>
                    </span></u></h1>
     </center>
     <hr>
     <br>
     <br>
     <ol>
          <li>

               <a href="13my_acc.html">



                    <button>MY ACCOUNT</button>


          </li>
          <br>
          <li>
               <a href="14request book.html">
                    <button>REQUEST BOOK</button>


          </li>
          <br>
          <a href="15issue record.html">
               <li><button>BOOK RECORD</button></li>

               <br>
     </ol>
     <br>
     <br>
     <div>
          <button>LOGOUT</button>
     </div>

     <br>
     <a href="st_homepage.html">
          <button>BACK</button>
     </a>
</body>

</html>