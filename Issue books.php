<?php

@include 'config.php';

if (isset($_POST['submit'])) {

	$ISBNNumber = mysqli_real_escape_string($bookconn, $_POST['ISBNNumber']);
	$user_id = mysqli_real_escape_string($bookconn, $_POST['user_id']);
	$name = mysqli_real_escape_string($bookconn, $_POST['name']);


	$select = " SELECT user_form.user_id, user_form.name, book_list.ISBNNumber FROM user_form join book_list WHERE user_form.user_id = '$user_id' && user_form.name = '$name' && book_list.ISBNNumber='$ISBNNumber'";
	$result = mysqli_query($bookconn, $select);


	if (mysqli_num_rows($result) > 0) {


		$insert = "INSERT INTO issued_books(ISBNNumber, user_id, name) VALUES('$ISBNNumber','$user_id','$name')";
		mysqli_query($bookconn, $insert);
	}
	 else {
    $error[] = 'Book/User does not exist.';
  }
	
};
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
			<h3>issue books</h3>

			<?php
			if (isset($error)) {
				foreach ($error as $error) {
					echo '<span class="error-msg">' . $error . '</span>';
				};
			};
			?>

			<input type="number" name="ISBNNumber" required placeholder="ISBNNumber">
			<input type="number" name="user_id" required placeholder="User ID">
			<input type="text" name="name" required placeholder="Issued By">





			<input type="submit" name="submit" class="form-btn">

		</form>

	</div>

</body>

</html>