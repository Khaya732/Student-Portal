<?php

session_start();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<style>
  .column{
    text-align: center;
  }
  </style>
<form method="post">

<figure class="text-center" style="text-align: center;">
        <blockquote class="blockquote">
          <h2>Edit and view students progress report</h2>
        </blockquote>
        <figcaption class="blockquote-footer">
          As a lecturer you can edit or view <cite title="Source Title"> a progress report</cite>
        </figcaption>
      </figure>
<br>
<br>

<table class="table">
  <thead>
    <tr>
      <th scope="col">TEST</th>
      <th scope="col">Development Software 302</th>
      <th scope="col">Information Systems 302</th>
      <th scope="col">Internet Programming 302</th>
      <th scope="col">Web Page Design 302</th>
      <th scope="col">Business Communication 302</th>
    </tr>
  </thead>

  <tbody>
    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "students";

    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
}

    $sql = "SELECT * FROM `".$_SESSION['temp']."` ";
    $result = $conn->query($sql);

    if (!$result) {
        die("Invalid query: ". $conn->error);
    }

    while ($row = $result->fetch_assoc()) {

        echo "
        <tr>
      
      <td>$row[TEST]</td>
      <td>>>$row[DS302]</td>
      <td>>>$row[IS302]</td>
      <td>>>$row[IP302]</td>
      <td>>>$row[WPD302]</td>
      <td>>>$row[BC302]</td>
      <td> <a class='btn btn-primary' href = 'delete.php?test=$row[TEST]'> Delete </a>

    </tr>
        ";
    }

    ?>
      
  </tbody>
</table>
  
<div class="column"><a class="btn btn-outline-warning" href="create.php">Add new marks</a></div>
<br>
<div class="column"><a class="btn btn-outline-warning" href="welcome.php">Log off</a></div>
</form>

</body>
</html>
