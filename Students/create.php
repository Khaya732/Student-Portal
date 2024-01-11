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

if(isset($_POST['search'])) { 


  $name = $_POST['stn']; 
  echo "You are currently viewing " .$name. " Progress Report";
  // You can use $name now as a variable  
}

$test = "";
$DS = "";
$IS = "";
$IP = "";
$WPD = "";
$BC = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  
  $name = $_POST['ST']; 
  $test = $_POST["test"];
  $DS = $_POST["DS"];
  $IS = $_POST["IS"];
  $IP = $_POST["IP"];
  $WPD = $_POST["WPD"];
  $BC = $_POST["BC"];


do {

  if( empty($test) || empty($DS) || empty($IS) || empty($IP) || empty($WPD) || empty($BC) ){
  $errorMessage = "All the fields are required";
  break;
  }

  //add new marks
  $sql = "INSERT INTO `$name` (`TEST`, `DS302`, `IS302`, `IP302`, `WPD302`, `BC302`) 
VALUES ('$test','$DS','$IS','$IP','$WPD','$BC')";

    $result = $conn->query($sql);

    if (!$result) {
        die("Invalid query: ". $conn->error);
        break;
    }


  $test = "";
  $DS = "";
  $IS = "";
  $IP = "";
  $WPD = "";
  $BC = "";

  $successMessage = "Marks added successfuly";
  

} while(false);

}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php
if ( !empty($errorMessage) ){
  echo "
  <div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>$errorMessage</strong> Please re-enter.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>
  ";
}
?>


<form method = "post">
<style>
    .btn{
      text-align: center;
    }

    .border{

      width: 70%;
      margin: auto;
      text-align: center;
    }
    .column{
      text-align: center;
    }
  
</style>

<figure class="text-center" style="text-align: center;">
        <blockquote class="blockquote">
          <h2>Enter student marks</h2>
        </blockquote>
        <figcaption class="blockquote-footer">
          As a lecturer you can enter <cite title="Source Title">a students marks</cite>
        </figcaption>
      </figure>

      <p class="text-decoration-underline">Which students marks do you wish to enter</p>
      <div class="form-floating">
  <input type = "text" class="form-control" placeholder="Password" name = "ST" value = >
  <label for="floatingPassword">Student number</label>
</div> 
<br>
<hr class="border border-primary border-2 opacity-75">   
<br>
<div class="form-floating mb-3">
  <input type = "text" class="form-control"  placeholder="Password" name = "test" value = "<?php echo $test; ?>">
  <label for="floatingInput">Test</label>
</div>
<div class="form-floating mb-3">
  <input type = "text" class="form-control"  placeholder="Password" name = "DS" value = "<?php echo $DS; ?>">
  <label for="floatingPassword">Development Software 302</label>
</div>
<div class="form-floating mb-3">
  <input type = "text" class="form-control"  placeholder="Password" name = "IS" value = "<?php echo $IS; ?>">
  <label for="floatingInput">Information Systems 302</label>
</div>
<div class="form-floating mb-3">
  <input type = "text" class="form-control"  placeholder="Password" name = "IP" value = "<?php echo $IP; ?>">
  <label for="floatingPassword">Internet Programming</label>
</div>
<div class="form-floating mb-3">
  <input type = "text" class="form-control"  placeholder="Password" name = "WPD" value = "<?php echo $WPD; ?>">
  <label for="floatingInput">Web Page Design 302</label>
</div>
<div class="form-floating mb-3">
  <input type = "text" class="form-control"  placeholder="Password" name = "BC" value = "<?php echo $BC; ?>">
  <label for="floatingPassword">Business Communication 302</label>
</div>

<?php
if (!empty($successMessage)){
  echo "
  <div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>$successMessage</strong> Proceed to view marks.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>
  
  ";
}
?>

<button type="submit" class="btn btn-primary" name = "Submit">Submit</button> 
<div class="column"><a class="btn btn-outline-warning" href="index.php">View marks</a></div>
</form>
</body>
</html>

