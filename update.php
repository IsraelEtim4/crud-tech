<?php
  // link with config.php to connect to the database
  include "config.php";

  // When the update button is clicked, we need this code to process it
  if(isset($_POST['update'])) {
    $firstname = $_POST['firstname'];
    $user_id = $_POST['user_id'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];

    // To update the table of users
    $sql = "UPDATE `users` SET 
      `firstname` = '$firstname', 
      `lastname` = '$lastname', 
      `email` = '$email', 
      `gender` = '$gender', 
      `password` = '$password', 
      `id` = '$user_id' 
    WHERE `id` = '$user_id'";

    // Execute the query
    $result = $conn->query($sql);

    // If the record is updated
    if($result == TRUE) {
      // Echo
      // echo "Record Updated Successfully";
      header("Location: view.php");
      exit();
    }
    // Else show an error
    else {
      echo "Error:". $sql . "<br>" . $conn->error;
    }
  }

  // To edit our record
  if(isset($_GET['id'])) {
    $user_id = $_GET['id'];

    // To check the data
    $sql = "SELECT * FROM `users` WHERE `id` = '$user_id'";

    // Execute our query
    $result = $conn->query($sql);

    // This will check if there is data in our database
    if($result->num_rows > 0) {
      // To fetch the data
      while($row = $result->fetch_assoc()) {
        $first_name = $row['firstname'];
        $last_name = $row['lastname'];
        $email = $row['email'];
        $password = $row['password'];
        $gender = $row['gender'];
        $id = $row['id'];
      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UPDATE PAGE</title>
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
          <form action="" method="POST">
            <h2> Update Data </h2>
            <div class="uname">
              <label for="">First Name</label>
              <input class="options" type="text" name="firstname" value="<?php echo $first_name; ?>">
              <input type="hidden" name="user_id" value="<?php echo $id; ?>">
            </div>
            <div class="uname">
              <label for="">Last Name</label>
                <input class="options" type="text" name="lastname" value="<?php echo $last_name; ?>">
            </div>
            <div class="uname">
              <label for="">Email</label>
              <input class="options" type="email" name="email" value="<?php echo $email; ?>">
            </div>
            <div class="uname">
              <label for="">Password</label>
              <input class="options" type="password" name="password" value="<?php echo $password; ?>">
            </div>
            <div class="uname">
              <label for="">Gender</label>
              <div class="radio-button">
                <input type="checkbox" name="gender" value="Male" <?php if($gender == 'Male'){echo "checked";} ?>>
                <input type="checkbox" name="gender" value="Female" <?php if($gender == 'Female'){echo "checked";} ?>>
              </div>
            </div>
            <button type="submit" class="main_btn" value="update" name="update">Update</button>
          </form>      
        </div>
        <div class="main_img-container">
          <img src="pic1.svg" alt="pic" id="main_img">
        </div>
      </div>
    </div>
    
    <script src="script.js"></script>
</body>
</html>

<?php
  } else {
    // If the 'id value is not valid, redirect the user back to view.php page
    header("Location: view.php");
  }
}
?>
