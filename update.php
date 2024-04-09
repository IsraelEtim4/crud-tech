<?php
  include "config.php";

  if(isset($_POST['update'])) {
    $firstname = $_POST['firstname'];
    $user_id = $_POST['id'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "UPDATE `users` SET `firstname` = '$firstname', `lastname` = '$lastname', `email` = '$email', `password` = '$password' WHERE `id` = '$user_id'";

    $result = $conn->query($sql);

    if($result == TRUE) {
      echo "Record Updated Successfully";
    }
    else {
      echo "Error:". $sql . "<br>" . $conn->error;
    }
  }

  if(isset($_GET['id'])) {
    $user_id = $_GET['id'];

    $sql = "SELECT * FROM `users` WHERE `id` = '$user_id'";

    $result = $conn->query($sql);

    if($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $first_name = $row['firstname'];
        $last_name = $row['lastname'];
        $email = $row['email'];
        $password = $row['password'];
        $id = $row['id'];
      }
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
            <a href="view.php" class="button">View List</a>
          </li>
      </div>
    </nav>

    <!-- Signup Section -->
    <div class="main">
      <div class="main_container">
        <div class="main_content">
          <form action="admin_home.php" method="POST">
            <h2> Update Data </h2>
            <div class="uname">
              <label for="">First Name</label>
                <input type="text" name="firstname" value="<?php echo $first_name; ?>">
                <input type="hidden" name="user_id" value="<?php echo $id; ?>">
            </div>
            <div class="uname">
              <label for="">Last Name</label>
                <input type="text" name="lastname" value="<?php echo $last_name; ?>">
            </div>
            <div class="uname">
              <label for="">Email</label>
              <input type="email" name="email" value="<?php echo $email; ?>">
            </div>
            <div class="uname">
              <label for="">Password</label>
              <input type="password" name="password" value="<?php echo $password; ?>">
            </div>
            <button type="submit" class="main_btn" value="update">Update</button>
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

<?php
  } else {
    // If the 'id value is not valid, redirect the user back to view.php page
    header("Location: view.php");
  }
}
?>