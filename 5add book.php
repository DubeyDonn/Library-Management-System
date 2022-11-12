<?php

@include 'config.php';

if (isset($_POST['submit'])) {

   $book_id = mysqli_real_escape_string($bookconn, $_POST['book_id']);
   $book_name = mysqli_real_escape_string($bookconn, $_POST['book_name']);
   $authors = mysqli_real_escape_string($bookconn, $_POST['author']);
   $edition = mysqli_real_escape_string($bookconn, $_POST['edition']);
   $status = $_POST['status'];
   $quantity = mysqli_real_escape_string($bookconn, $_POST['quantity']);


   $insert = "INSERT INTO book_list(book_id, Name, Authors, Edition, Status, Quantity) VALUES('$book_id','$book_name','$authors','$edition','$status', $quantity)";
   mysqli_query($bookconn, $insert);

   //   $select = " SELECT * FROM book_list WHERE email = '$email' && password = '$pass' ";

   //   $result = mysqli_query($loginconn, $select);

   //   if (mysqli_num_rows($result) > 0) {

   //     $error[] = 'user already exist!';

   //   } else {

   //     if ($pass != $cpass) {
//       $error[] = 'password not matched!';
//     } else {
//       $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
//       mysqli_query($loginconn, $insert);
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

         <input type="number" name="book_id" required placeholder="book ID">
         <input type="text" name="book_name" required placeholder="book name">
         <input type="text" name="author" required placeholder="authors">
         <input type="text" name="edition" required placeholder="edition">
         <select name="status">
            <option value="available">available</option>
            <option value="unavailable">unavailable</option>
         </select>
         <input type="number" name="quantity" required placeholder="quantity">

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