<?php
  // link with config.php to connect to the database
  include "config.php";

  if(isset($_GET['id'])) {
    $user_id = $_GET['id'];

    $sql = "DELETE FROM `users` WHERE `id` = '$user_id'";

    $result = $conn->query($sql);

    if($result == TRUE) {
      // echo "Record deleted successfully.";
      header("Location: view.php");
      exit();
    } else {
      echo "Error:" . $sql . "<br>" . $conn->error;
    }
  }
?>
