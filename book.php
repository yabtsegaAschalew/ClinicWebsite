<?php
  require_once "dbh.inc.php";


  $err = "";
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $required = ['firstName', 'lastName', 'phone', 'appointment-date', 'appointment-time'];
    foreach ($required as $field) {
      if (empty($_POST[$field])) {
        die("Error: Required field '$field' is missing.");
      }
    }

    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
    $email = mysqli_real_escape_string($conn, $_POST['email'] ?? '');
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $err = "Please enter a valid email";
    }
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $appointment_date = mysqli_real_escape_string($conn, $_POST['appointment-date']);
    $appointment_time = mysqli_real_escape_string($conn, $_POST['appointment-time']);
    $appointment_types = [];
    if (!empty($_POST['appointment'])) {
      foreach ($_POST['appointment'] as $selected) {
        $appointment_types[] = mysqli_real_escape_string($conn, $selected);
      }
    }
    $appointment_types_str = implode(', ', $appointment_types);

    $sql = "INSERT INTO appointments (firstName, lastName, email, phone, appointment_types, appointment_date, appointment_time) VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'sssssss', $firstName, $lastName, $email, $phone, $appointment_types_str, $appointment_date, $appointment_time);

    if (mysqli_stmt_execute($stmt)) {
      header("Location:index.php");
      exit();
    } else {
      header("Location:book.php?error=" . urlencode(mysqli_error($conn)));
      exit();
    }

    mysqli_stmt_close($stmt);
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Appointment</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="icon" href="images/logo.jpg">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/book.css">
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

  <main>
    <h1>Book Your Appointment</h1>
    <form action="" method="post" id="bookingForm">
      <fieldset>
        <legend>Select Appointment Type(s)</legend>
        <div class="checkbox-group">
          <div>
            <input type="checkbox" id="cardiology" name="appointment[]" value="Cardiology">
            <label for="cardiology">Cardiology</label>
          </div>
          <div>
            <input type="checkbox" id="chronic" name="appointment[]" value="Chronic Disease">
            <label for="chronic">Chronic Disease</label>
          </div>
          <div>
            <input type="checkbox" id="dermatology" name="appointment[]" value="Dermatology">
            <label for="dermatology">Dermatology</label>
          </div>
          <div>
            <input type="checkbox" id="checkups" name="appointment[]" value="General Check-ups">
            <label for="checkups">General Check-ups</label>
          </div>
          <div>
            <input type="checkbox" id="gynecology" name="appointment[]" value="Gynecology">
            <label for="gynecology">Gynecology</label>
          </div>
          <div>
            <input type="checkbox" id="orthopedics" name="appointment[]" value="Orthopedics">
            <label for="orthopedics">Orthopedics</label>
          </div>
          <div>
            <input type="checkbox" id="pediatrics" name="appointment[]" value="Pediatrics">
            <label for="pediatrics">Pediatrics</label>
          </div>
          <div>
            <input type="checkbox" id="vaccination" name="appointment[]" value="Vaccination">
            <label for="vaccination">Vaccination</label>
          </div>
        </div>
      </fieldset>

      <fieldset>
        <legend>Select Date and Time</legend>
        <div>
          <label for="appointment-date">Select Date:</label>
          <input type="date" id="appointment-date" name="appointment-date" required>
        </div>
        <div>
          <label for="appointment-time">Select Time:</label>
          <input type="time" id="appointment-time" name="appointment-time" min="09:00" max="17:00" required>
        </div>
        <p class="date-time-error"></p>
      </fieldset>


      <fieldset>
        <legend>Your Information</legend>
        <div>
          <label for="firstName">First Name: <sup style="color: red;">*</sup></label>
          <input type="text" id="firstName" name="firstName" required>
        </div>
        <div>
          <label for="lastName">Last Name: <sup style="color: red;">*</sup></label>
          <input type="text" id="lastName" name="lastName" required>
        </div>
        <div>
          <?php
            if(!empty($err)) echo "<p class = 'message'> " .$err. "</p>";
          ?>
          <label for="email">E-Mail: (Optional)</label>
          <input type="email" id="patient-email" name="email">
        </div>
        <div>
          <label for="phone">Phone Number: <sup style="color: red;">*</sup></label>
          <input type="tel" id="phone" name="phone" required>
        </div>
      </fieldset>
      <button type="reset">Reset</button>
      <button type="submit" onclick="timeChecker(); bookingFormFun();">Book Appointment</button>
    </form>
  </main>
  <footer>
    <div class="copyright">
      <p id="copyright">&copy;2025 All rights reserved</p>
    </div>
  </footer>
  <script src="js/script.js"></script>
  <script src="js/booking.js"></script>
</body>

</html>