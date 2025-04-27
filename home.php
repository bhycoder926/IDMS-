<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Intelligent Disaster Management System</title>

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="home.css">
</head>

<body>

  <button class="menu-button" id="menuBtn">
    <i class="fas fa-bars"></i>
  </button>

  <aside class="sidebar" id="sidebar">
    <div class="logo">IDMS</div>
    <nav class="nav-links">
      <a href="#">Live Updates</a>
      <a href="#">Services</a>
      <a href="#">Crew Members</a>
      <a href="#">Resources</a>
      <a href="login.php">Login</a>
      <a href="register.php">Register</a>
    </nav>
  </aside>

  <main class="main-content" id="mainContent">
    <div class="content-wrapper">

      <section class="hero">
        <h1>Welcome to Intelligent Disaster Management System</h1>
        <p>Real-time disaster updates, crew management, and resource allocation made smart.</p>
      </section>

      <section class="action-buttons">
        <a href="#" class="volunteer-btn">
          <i class="fas fa-user-plus"></i> Volunteer Now
        </a>
        <a href="#" class="donate-btn">
          <i class="fas fa-hand-holding-usd"></i> Donate
        </a>
        <a href="#" class="updates-btn">
          <i class="fas fa-exclamation-triangle"></i> View Live Updates
        </a>
      </section>

      <section class="news-feed">
        <h2>Latest News</h2>

        <div class="news-item alert">
          <strong>Alert:</strong> Major flood in Assam. Relief teams dispatched.
        </div>

        <div class="news-item update">
          <strong>Update:</strong> Cyclone Burevi weakens over Tamil Nadu.
        </div>

        <div class="news-item announcement">
          <strong>Announcement:</strong> New volunteers training session next week.
        </div>
      </section>

    </div>

    <footer>
      &copy; 2025 Intelligent Disaster Management System. All rights reserved.
      <div class="social-icons">
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-linkedin"></i></a>
      </div>
    </footer>
  </main>

  
<!-- Link your custom JavaScript -->
<script src="home.js"></script>
</body>
</html>
