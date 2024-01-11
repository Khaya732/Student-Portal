<?php

session_start();

if(isset($_GET["test"])) { 
    $test = $_GET["test"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "students";
  
    $conn = new mysqli($servername, $username, $password, $database);

    $name = $_SESSION['temp'];

    $sql = "DELETE FROM `$name` where TEST = '$test' ";
    $conn->query($sql);

}

header("location: /Students/index.php");
    exit;

?>