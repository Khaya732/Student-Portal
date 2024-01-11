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

<form method = "post" action = "#">

<figure class="text-center" style="text-align: center;">
        <blockquote class="blockquote">
          <h1>Welcome Student</h1>
        </blockquote>
        <figcaption class="blockquote-footer">
          Enter your student number<cite title="Source Title"> and passcode</cite>
        </figcaption>
      </figure>

      <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Student number</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name = "number">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Passcode</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name = "passcode">
</div>

<div class="d-grid gap-2 col-6 mx-auto">
  <button class="btn btn-primary" type="submit" name = "submit" value="login">Button</button>
</div>

<form>
</body>
</html>

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
   
    if (isset($_POST['number'])) {
    
        $_SESSION['temp'] = $_POST['number'];
        $passc = $_POST['passcode'];

        

        $sql = "SELECT * FROM studentlogin WHERE StudentNumber = '".$_SESSION['temp']."' AND Passcode = '".$passc."' ";

        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);


        if ($count==1){
            header("Location:markview.php");

        }
        else{
          echo "<script> 
          alert('Login failed. Invalid Student number or passcode!!');
          </script>";
        }
    }
    
    

?>