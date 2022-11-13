<?php

@include 'config.php';

$sql = "SELECT ISBNNumber, user_id, name FROM issued_books ";
$result = $bookconn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Issued Books</title>
  <link rel="stylesheet" href="table.css" />
</head>
<body>
  <center>
    <h1>Issued Books</h1>
  </center>
  <center>
    <table class="content-table">


      <thead>
        <tr>
			<th>#</th>

          <th>ISBN Number</th>
          <th>User ID</th>
          <th>Issued By</th>
          
        </tr>
      </thead>
      <tbody>
        <?php
		$cnt=1;
        if ($result->num_rows > 0) {
          while ($rows = $result->fetch_assoc()) {
            echo "<tr><td>" . $cnt . "</td><td>" . $rows["ISBNNumber"] . "</td> <td>" . $rows["user_id"] . "</td><td>" . $rows["name"] . "</td></tr>";
          }
          echo "</table>";
        } else {
          echo "No Record!";
        }
		$cnt=$cnt+1;

        $bookconn->close();


        ?>
      </tbody>
    </table>
  </center>		
</body>
</html>