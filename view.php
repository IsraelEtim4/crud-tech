<?php
  // link with config.php to connect to the database
  include "config.php";

  // The sql query. It will get the data from the table
  $sql = "SELECT * FROM users";

  // To execute the query
  $result = $conn->query($sql);
?>

<!-- Out html code to display the inputted data -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VIEW PAGE</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
  <!-- Navbar Section -->
  <!-- <nav class="navbar">
    <div class="navbar_container">
      <a href="" id="navbar_logo">
        <i class="fas fa-gem"></i>
        SWING
      </a>
      <div class="navbar_toggle" id="mobile-menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
      <ul class="navbar_menu">
        <li class="navbar_item">
          <a href="" class="navbar_links">Home</a>
        </li>
        <li class="navbar_item">
          <a href="tech.html" class="navbar_links">Tech</a>
        </li>
        <li class="navbar_item">
          <a href="admin_index.php" class="navbar_links">Admin</a>
        </li>
        <li class="navbar_btn">
          <a href="signup.php" class="button">Sign Up</a>
        </li>
      </ul>
    </div>
  </nav> -->

  <div class="container">
    <h2>users</h2>
    <table class="table">
      <thread>
        <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Gender</th>
          <th>Action</th>
        </tr>
      </thread>
      <tbody>

        <?php
        // This will check if there is data in our database
          if($result->num_rows>0) {
            // If there is data, we will fetch the saved data
            while($row = $result->fetch_assoc()) {
          
        ?>
              <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['lastname']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td>
                  <a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                </td>
              </tr>
            <?php }
          }
            ?>
      </tbody>
    </table>
  </div>

  <script src="script.js"></script>
</body>
</html>