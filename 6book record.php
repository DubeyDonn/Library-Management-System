<?php

@include 'config.php';

$sql = "SELECT ISBNNumber, Name, Authors, Edition, Status FROM book_list ";
$result = $bookconn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Available books in library.</title>
  <link rel="stylesheet" href="table.css" />
</head>

<body>
  <center>
    <h1>Available Books in Library.</h1>
  </center>
  <center>
    <table class="content-table">


      <thead>
        <tr>

          <th>ISBNNumber</th>
          <th>Book Name</th>
          <th>Authors</th>
          <th>Edition</th>
          <th>Status</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
        if ($result->num_rows > 0) {
          while ($rows = $result->fetch_assoc()) {
            echo "<tr><td>" . $rows["ISBNNumber"] . "</td> <td>" . $rows["Name"] . "</td><td>" . $rows["Authors"] . "</td><td>" . $rows["Edition"] . "</td><td>" . $rows["Status"] . "</td></tr>";
          }
          echo "</table>";
        } else {
          echo "No Record!";
        }

        $bookconn->close();


        ?>
      </tbody>
    </table>
  </center>
</body>

</html>