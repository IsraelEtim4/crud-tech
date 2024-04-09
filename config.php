<?php
// To configure our database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "mydb";

  // Create a connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // To check for errors
  if($conn->connect_error) {
    die("Connection Failed" . $conn->connect_error);
  }
?>
