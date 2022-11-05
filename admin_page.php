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
</head>

<body>
	<center>
		<h1><u>ADMIN<span>
					<?php echo $_SESSION['admin_name'] ?>
				</span></u></h1>
	</center>
	<hr>
	<ol>
		<a href="5add book.html">
			<li><button>ADD BOOK</button></li>

			<br>
			<a href="6book record.html">
				<li><button>BOOK REPORT</button></li>

				<br>
				<a href="7book request.html">
					<li><button>BOOK REQUEST</button></li>


					<br>

					<a href="addperson.html">
						<li><button>ADD PERSON</button></li>

						<br>
						<a href="9student record.html">
							<li><button>STUDENT RECORD</button></li>

							<br>
							<a href="10issue book.html">
								<li><button>ISSUE BOOK</button></li>

								<br>
								<a href="11issue book record.html">
									<li><button>ISSSUE BOOK REPORT</button></li>

									<br>

	</ol>
	<div>
		<button>LOGOUT</button>
	</div>
	<br>
	<a href="admin.html"><input type="submit" name="submit" value="BACK"></a>

</body>

</html>