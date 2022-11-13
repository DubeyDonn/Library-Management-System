<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['admin_name'])) {
	header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Homepage</title>
	<link rel="stylesheet" href="style.css">
</head>



<body>
	<div class="form-container">

    <form>
      <h3>admin page</h3>
	  <h3><u><span>
					<?php echo $_SESSION['admin_name'] ?>
				</span></u></h3>
      
	  <a href="5add book.php"><input type="button"  value="add book" class="form-btn"></a>
	  <a href="6book record.php"><input type="button"  value="Available Books" class="form-btn"></a>
	  <a href="Issue books.php"><input type="button"  value="Issue Books" class="form-btn"></a>
	  <a href="Issued books.php"><input type="button" value="ISSUE RECORDS" class="form-btn"></a>
	  <a href="addperson.php"><input type="button"  value="ADD PERSON" class="form-btn"></a>
	  <a href="9student record.html"><input type="button"  value="STUDENT RECORD" class="form-btn"></a>
      <p><a href="login_form.php">back</a></p>
    </form>

  </div>
	
</body>

</html>