<?php
  // link with config.php to connect to the database
  include "config.php";

  // Checking if the form are retest
  if(isset($_POST['submit'])) {
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `users` (`firstname`, `lastname`, `email`, `password`) VALUES ('$first_name', '$last_name', '$email', '$password')";

    $result = $conn->query($sql);
      
    if($result == TRUE) {
      echo "New record created successfully";
    }
    else {
      echo "Error:" . $sql . "<br>". $conn->error;
    }

    $conn->close();
  }

  // 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Page</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;600;700&family=League+Spartan:wght@100&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
   <!-- Navbar Section -->
   <nav class="navbar">
      <div class="navbar_container">
        <a href="index.html" id="navbar_logo">
          <i class="fas fa-gem"></i>ISRAEL
        </a>
        <div class="navbar_toggle" id="mobile-menu">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <ul class="navbar_menu">
          <li class="navbar_item">
            <a href="index.html" class="navbar_links">Home</a>
          </li>
          <li class="navbar_item">
            <a href="tech.html" class="navbar_links" target="_blank">Tech</a>
          </li>
          <li class="navbar_item">
            <a href="" class="navbar_links">Products</a>
          </li>
          <li class="navbar_btn">
            <a href="index.php" class="button">Login</a>
          </li>
      </div>
    </nav>

    <!-- Signup Section -->
    <div class="main">
      <div class="main_container">
        <div class="main_content">
          <form action="welcome.php" method="POST">
            <h2> Personal Data </h2>
            <div class="uname">
              <label for="">First Name</label>
              <input type="text" name="firstname">
            </div>
            <div class="uname">
              <label for="">Last Name</label>
              <input type="text" name="lastname">
            </div>
            <div class="uname">
              <label for="">Email</label>
              <input type="email" name="email">
            </div>
            <div class="uname">
              <label for="">Password</label>
              <input type="password" name="password">
            </div>
            <button type="submit" class="main_btn" value="submit">Sign Up</button>
          </form>      
        </div>
        <div class="main_img-container">
          <img src="pic1.svg" alt="pic" id="main_img">
        </div>
      </div>
    </div>
    
      <script type="text/javascript" charset="utf-8">
    app.js
  </script>
</body>
</html>