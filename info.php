<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Info</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="icon" href="images/logo.jpg">
  <link rel="stylesheet" href="css/info.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="nav-bar">
    <div class="Motto">
      <p class="motto">"Caring for You, Committed to Excellence."</p>
    </div>
    <ul>
      <li><a href="index.php#home"><button>Home</button></a></li>
      <li><a href="index.php#info"><button>Info</button></a></li>
      <li><a href="index.php#contact"><button>Contact</button></a></li>
      <li><a href="book.php"><button>Book</button></a></li>
      <li><a href="login.php"><button>Login</button></a></li>
    </ul>
  </div>
  <a id="cardiology"></a>
  <div class="item" id="first-item">
    <img src="images/Cardiology.jpg" alt="cardiology image">
    <p>At Harmony Medical Center, our cardiology department is dedicated to providing exceptional heart care with advanced diagnostics and expert treatment. Our experienced cardiologists use state-of-the-art technology to detect, prevent, and manage heart conditions with precision. From routine checkups to specialized procedures, we ensure personalized care tailored to each patient’s needs. With a focus on prevention and long-term wellness, we are committed to keeping your heart healthy and your life full of vitality.</p>
    <a href="book.php"><button>Book Appointment</button></a>
  </div>
  <a id="chronic"></a>
  <div class="item">

    <img src="images/Chronic Disease.jpg" alt="chronic disease image">
    <p>At Harmony Medical Center, our chronic disease management program is designed to provide comprehensive, long-term care for conditions such as diabetes, hypertension, and respiratory diseases. Our expert team develops personalized treatment plans, combining advanced diagnostics, medication management, and lifestyle guidance to improve your quality of life. With a focus on prevention and continuous support, we empower patients to take control of their health and achieve lasting well-being.</p>
    <a href="book.php"><button>Book Appointment</button></a>
  </div>
  <a id="Dermatology"></a>
  <div class="item">

    <img src="images/Dermatology.jpg" alt="dermatology image">
    <p>At Harmony Medical Center, our dermatology services focus on diagnosing and treating a wide range of skin conditions, from acne and eczema to more complex dermatological concerns. Using advanced technology and personalized care, our specialists provide effective treatments to restore skin health and confidence. Whether you need routine skincare, cosmetic procedures, or specialized medical treatment, we are committed to helping you achieve healthy, radiant skin.</p>
    <a href="book.php"><button>Book Appointment</button></a>
  </div>
  <a id="bp"></a>
  <div class="item">

    <img src="images/General Check-ups.jpg" alt="general checkups image">
    <p>At Harmony Medical Center, our general check-ups are designed to ensure your overall well-being through comprehensive health assessments. Our experienced medical team conducts thorough evaluations, early disease screenings, and personalized health advice to keep you in optimal condition. With a focus on preventive care, we help you stay ahead of potential health issues, ensuring a healthier future for you and your loved ones.</p>
    <a href="book.php"><button>Book Appointment</button></a>
  </div>
  <a id="Gynecology"></a>
  <div class="item">

    <img src="images/Gynecology.jpg" alt="gynecology image">
    <p>At Harmony Medical Center, our gynecology services provide compassionate and specialized care for women's health at every stage of life. From routine check-ups and preventive screenings to advanced treatments, our expert gynecologists are dedicated to ensuring your well-being. With a focus on personalized care, we prioritize your comfort, reproductive health, and overall wellness.</p>
    <a href="book.php"><button>Book Appointment</button></a>
  </div>
  <a id="Orthopedics"></a>
  <div class="item">

    <img src="images/Orthopedics.jpg" alt="Orthopedics image">
    <p>At Harmony Medical Center, our orthopedics department provides expert care for bone, joint, and muscle conditions. Whether you're recovering from an injury, managing chronic pain, or seeking advanced surgical solutions, our specialists use cutting-edge treatments to restore mobility and improve quality of life. We are committed to helping you move pain-free and stay active.</p>
    <a href="book.php"><button>Book Appointment</button></a>
  </div>
  <a id="Pediatrics"></a>
  <div class="item">

    <img src="images/Pediatrics.jpg" alt="pediatric image">
    <p>At Harmony Medical Center, our pediatrics department is committed to providing exceptional care for children of all ages. From routine wellness check-ups to specialized treatments, our experienced pediatricians ensure your child’s health and development are prioritized. With a warm and child-friendly environment, we focus on preventive care, early diagnosis, and personalized treatment plans to support your little one’s well-being.</p>
    <a href="book.php"><button>Book Appointment</button></a>
  </div>
  <a id="Vaccination"></a>
  <div class="item">

    <img src="images/Vaccination.jpg" alt="vaccination image">
    <p>At Harmony Medical Center, our vaccination services are designed to protect you and your loved ones from preventable diseases. We offer a comprehensive range of vaccines for all age groups, administered by skilled healthcare professionals in a safe and comfortable environment. By staying up to date with immunizations, you can safeguard your health and contribute to a healthier community.</p>
    <a href="book.php"><button>Book Appointment</button></a>
  </div>
  <div class="patient-request">
    <form action="">
      <div>
        <label for="patient-email">Enter E-Mail</label>
        <input class="" type="text" name="" id="patient-email" required>
      </div>
      <div>
        <label for="fName">First Name</label>
        <input type="text" name="" id="fName" required>
      </div>
      <button type="button" id="med-id" onclick="emailCheck();">Request Medical Record</button>
    </form>
  </div>
  <footer>
      <div class="copyright">
        <p id="copyright">&copy;2025 All rights reserved</p>
      </div>
  </footer>
  <script src="js/script.js"></script>
</body>

</html>