<?php
  session_start();

  if(isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <title>ADMIN PAGE</title>
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

    <!-- Admin Page -->
    <div class="main">
      <div class="main_container">
        <div class="main_content">
          <h1>HELLO</h1> 
          <h2>
           <?php echo $_SESSION['user_name']; ?> De Admin
          </h2>
          <button class="main_btn">
            <a href="admin_logout.php">Logout</a>
          </button>
        </div>
        <div class="main_img-container">
          <img src="pic2.jpg" alt="pic" id="main_img">
        </div>
      </div>
    </div>

    <!-- Services Section -->
    <div class="services">
      <h1>Welcome To Administrator's Page</h1>
      <div class="services_container">
        <div class="services_card">
          <h2>Experience Bliss</h2>
          <p>AI Powered Technology</p>
        </div>
        <div class="services_card">
          <h2>Are You Ready?</h2>
          <p>Take The Leap!</p>
        </div>
      </div>
    </div>

    <!-- Footer Section -->
    <div class="footer_container">
      <div class="footer_links">
        <div class="footer_link-wrapper">
          <div class="footer_link-items">
            <h2>About Us</h2>
            <a href="/">How it works</a>
            <a href="/">Testimonials</a>
            <a href="/">Careers</a>
            <a href="/">Investments</a>
            <a href="/">Terms of Service</a>
          </div>
          <div class="footer_link-items">
            <h2>Contact Us</h2>
            <a href="/">Contact</a>
            <a href="/">Supports</a>
            <a href="/">Destinations</a>
            <a href="/">Sponsorships</a>
          </div>
        </div>
        <div class="footer_link-wrapper">
          <div class="footer_link-items">
            <h2>Videos</h2>
            <a href="/">Submits</a>
            <a href="/">Videos</a>
            <a href="/">Ambassadors</a>
            <a href="/">Agency</a>
            <a href="/">Influencer</a>
          </div>
          <div class="footer_link-items">
            <h2>Social Media</h2>
            <a href="/">Instagram</a>
            <a href="/">Facebook</a>
            <a href="/">YouTube</a>
            <a href="/">Twitter</a>
            <a href="/">LinkedIn</a>
          </div>
        </div>
      </div>
      <div class="social_media">
        <div class="social_media-wrap">
          <div class="footer_logo">
            <a href="/" id="footer_logo"><i class="fas fa-gem"></i>ISRAEL</a>
          </div>
          <p class="website_rights">© ISRAEL 2020. All rights reserved</p>
          <div class="social_icon">
            <a href="/" class="social_icon-link" target="_blank">
              <i class="fab fa-facebook"></i>
            </a>
            <a href="/" class="social_icon-link" target="_blank">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="/" class="social_icon-link" target="_blank">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="/" class="social_icon-link" target="_blank">
              <i class="fab fa-linkedin"></i>
            </a>
            <a href="/" class="social_icon-link" target="_blank">
              <i class="fab fa-youtube"></i>
            </a>
          </div>
        </div>
      </div>
    </div>

  <script type="text/javascript" charset="utf-8">
    script.js
  </script>
  </body>
  </html>

  <?php
}
else {
  header("Location: admin_index.php");
  exit();
}
?>