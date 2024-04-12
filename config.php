<?php
// To configure our database
  $servername = "localhost";
  $username = "root";
  // default password for database is empty
  $password = "";
  $dbname = "mydb";

  // Create a connection for our database using $conn
  $conn = new mysqli($servername, $username, $password, $dbname);

  // To check for errors while creating the database
  if($conn->connect_error) {
    // If error found it will show a message as "connection failed"
    die("Connection Failed" . $conn->connect_error);
  }
?>