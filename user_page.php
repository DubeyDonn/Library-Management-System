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
     <title>User Homepage</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="style.css">
</head>

<!-- <body>
     <center>
          <h1><u>STUDENT/TEACHER<span>
                         <?php //echo $_SESSION['user_name'] ?>
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
</body> -->

<body>
     <div class="form-container">

          <form>
               <h3>user page</h3>
               <h3><u><span>
                              <?php echo $_SESSION['user_name'] ?>
                         </span></u></h3>

               <a href="6book record.php"><input type="button"  value="Available Books" class="form-btn"></a>
               
               <a href="Issued books.php"><input type="button" value="ISSUE RECORDS" class="form-btn"></a>
               
               <p><a href="login_form.php">back</a></p>
          </form>

     </div>

</body>

</html>