<!DOCTYPE html>
<html>
  <head>
    <title>SWING TECH</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;600;700&family=League+Spartan:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <!-- Navbar Section -->
    <nav class="navbar">
      <div class="navbar_container">
        <a href="index.html" id="navbar_logo">
          <i class="fas fa-gem"></i>SWING
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
            <a href="tech.html" class="navbar_links">Tech</a>
          </li>
          <li class="navbar_item">
            <a href="" class="navbar_links">Products</a>
          </li>
          <li class="navbar_btn">
            <a href="admin_index.php" class="button">Login</a>
          </li>
      </div>
    </nav>

    <!-- Signup Section -->
    <div class="main">
      <div class="main_container">
        <div class="main_content">
          <form action="admin_login.php" method="post" class="form-wrap">
            <h2>LOGIN</h2>
            <?php if(isset($_GET['error'])) { ?>
              <p class="error"> <?php echo $_GET['error']; ?> </p>
            <?php } ?>
            <div class="uname">
              <label>User Name</label>
              <input class="options" type="text" name="uname" placeholder="User Name">
            </div>
            <div class="uname">
              <label>Password</label>
              <input class="options" type="password" name="password" placeholder="Password">
            </div>
            <button type="submit" class="main_btn">Login</button>
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