<?php

@include 'config.php';

if (isset($_POST['submit'])) {

   $ISBNNumber = mysqli_real_escape_string($bookconn, $_POST['ISBNNumber']);
   $book_name = mysqli_real_escape_string($bookconn, $_POST['book_name']);
   $authors = mysqli_real_escape_string($bookconn, $_POST['author']);
   $edition = mysqli_real_escape_string($bookconn, $_POST['edition']);
   $status = $_POST['status'];


   $insert = "INSERT INTO book_list(ISBNNumber, Name, Authors, Edition, Status) VALUES('$ISBNNumber','$book_name','$authors','$edition','$status')";
   mysqli_query($bookconn, $insert);

   //   $select = " SELECT * FROM book_list WHERE email = '$email' && password = '$pass' ";

   //   $result = mysqli_query($bookconn, $select);

   //   if (mysqli_num_rows($result) > 0) {

   //     $error[] = 'user already exist!';

   //   } else {

   //     if ($pass != $cpass) {
//       $error[] = 'password not matched!';
//     } else {
//       $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
//       mysqli_query($bookconn, $insert);
//       header('location:login_form.php');
//     }
//   }

}
;
?>


<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ADD BOOK</title>


   <link rel="stylesheet" href="style.css">
</head>



<body>

   <div class="form-container">

      <form action="" method="post">
         <h3>add book</h3>

         <input type="number" name="ISBNNumber" required placeholder="ISBNNumber">
         <input type="text" name="book_name" required placeholder="book name">
         <input type="text" name="author" required placeholder="authors">
         <input type="text" name="edition" required placeholder="edition">
         <select name="status">
            <option value="available">available</option>
            <option value="unavailable">unavailable</option>
         </select>

         <!-- <label>Branch:
            <input type="radio" id="SE" name="software" value="SE">
            <label for="SE">SE</label>

            <input type="radio" id="CE" name="computer" value="CE">
            <label for="ce">CE</label> -->



         <input type="submit" name="submit" class="form-btn">

      </form>

   </div>

</body>

</html>