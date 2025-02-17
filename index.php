<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="images/logo.jpg">
  <title>Home Page</title>
</head>

<body>
  <header>
    <div class="container">

      <div class="nav-bar">
        <div class="Motto">
          <p class="motto">"Caring for You, Committed to Excellence."</p>
        </div>
        <ul>
          <li><a href="#home"><button>Home</button></a></li>
          <li><a href="#info"><button>Info</button></a></li>
          <li><a href="#contact"><button>Contact</button></a></li>
          <li><a href="book.php"><button>Book</button></a></li>
          <li><a href="login.php"><button>Login</button></a></li>
        </ul>
      </div>
      <div class="head">
        <a id="home"></a>
        <h1 class="welcome-text">Welcome to Harmony Medical Center</h1>
      </div>
      <div class="company-description">
        <div class="goal">
          <h2 class="goals">Goal</h2>
          <p class="goals">To provide high-quality, compassionate, and affordable healthcare, ensuring every patient receives personalized treatment in a comfortable and professional environment.</p>
        </div>
        <div class="vision">
          <h2 class="visions">Vision</h2>
          <p class="visions">To be a leading healthcare provider known for excellence in patient care, innovation, and community wellness, creating a healthier future for all.</p>
        </div>
      </div>

    </div>
  </header>
  <div class="wrapper">
    <a id="info"></a>
    <div class="images">
      <section class="container-2">
        <div class="img img1">
          <span>
            <button><a href="info.php">Show Description</a></button>
            <button><a href="book.php">Book Appointment</a></button>
          </span>
        </div>
        <div class="img img2">
          <span>
            <button id="Chronic"><a href="info.php#chronic">Show Description</a></button>
            <button><a href="book.php">Book Appointment</a></button>
          </span>
        </div>
        <div class="img img3">
          <span>
            <button id="Dermatology"><a href="info.php#Dermatology">Show Description</a></button>
            <button><a href="book.php">Book Appointment</a></button>
          </span>
        </div>
        <div class="img img4">
          <span>
            <button id="bp"><a href="info.php#bp">Show Description</a></button>
            <button><a href="book.php">Book Appointment</a></button>
          </span>
        </div>
        <div class="img img5">
          <span>
            <button id="Gynecology"><a href="info.php#Gynecology">Show Description</a></button>
            <button><a href="book.php">Book Appointment</a></button>
          </span>
        </div>
        <div class="img img6">
          <span>
            <button id="Orthopedics"><a href="info.php#Orthopedics">Show Description</a></button>
            <button><a href="book.php">Book Appointment</a></button>
          </span>
        </div>
        <div class="img img7">
          <span>
            <button id="Pediatrics"><a href="info.php#Pediatrics">Show Description</a></button>
            <button><a href="book.php">Book Appointment</a></button>
          </span>
        </div>
        <div class="img img8">
          <span>
            <button id="Vacination"><a href="info.php#Vaccination">Show Description</a></button>
            <button><a href="book.php">Book Appointment</a></button>
          </span>
        </div>
      </section>
    </div>
    <div class="contact">
      <a id="contact"></a>
      <div class="phone-num">
        <p style="padding-bottom: 10px;">Contacts</p>
        <p class="phone-num">(+251)911567898</p>
        <p class="phone-num">(+251)911557868</p>
        <p class="phone-num">(+251)910447898</p>
      </div>
      <div class="email">
        <p style="padding-bottom: 10px;">E-mail</p>
        <p class="email">harmonymedical@gmial.com</p>
      </div>
      <div class="google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d841.8404278233232!2d37.56206389571114!3d6.069927027863194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2set!4v1738626447338!5m2!1sen!2set" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
    <footer>
      <div class="copyright">
        <p id="copyright">&copy;2025 All rights reserved</p>
      </div>
    </footer>

  </div>
  <script src="js/script.js"></script>
</body>

</html>