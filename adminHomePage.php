<?php
require_once "dbh.inc.php";
$message = "";


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['addDoctor'])) {
    // Retrieve form values directly
    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $email = trim($_POST['email']);
    $pwd = trim($_POST['pwd']);
    $specialization = trim($_POST['specialization']);


    if (!empty($fname) && !empty($lname) && !empty($email) && !empty($pwd) && !empty($specialization)) {
        $sql = "INSERT INTO doctors_db (firstName, lastName, email, pwd, specialization) 
                VALUES ('" . $fname . "', '" . $lname . "', '" . $email . "', '" . $pwd . "', '" . $specialization . "')";
        if (mysqli_query($conn, $sql)) {
            $message = "Doctor added successfully!";
        } else {
            $message = "Error adding doctor: " . mysqli_error($conn);
        }
    } else {
        $message = "Please fill in all fields for adding a doctor.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['removeDoctor'])) {
    $remove_email = trim($_POST['remove_email']);

    if (!empty($remove_email)) {
        $sql = "DELETE FROM doctors_db WHERE email = '" . $remove_email . "'";
        if (mysqli_query($conn, $sql)) {
            if (mysqli_affected_rows($conn) > 0) {
                $message = "Doctor removed successfully!";
            } else {
                $message = "No doctor found with that email.";
            }
        } else {
            $message = "Error removing doctor: " . mysqli_error($conn);
        }
    } else {
        $message = "Please enter the doctor email to remove.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard - Manage Doctors</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="icon" href="images/logo.jpg">
  <link rel="stylesheet" href="css/adminHomepage.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <div class="container">
      <div class="nav-bar">
        <div class="Motto">
          <p class="motto">"Caring for You, Committed to Excellence."</p>
        </div>
        <ul>
          <li><a href="index.php"><button>Home</button></a></li>
          <li><a href="home.php"><button>Doctor Dashboard</button></a></li>
          <li><a href="adminlogin.php"><button>Logout</button></a></li>
        </ul>
      </div>
    </div>
  </header>

  <div class="admin-container">
    <h1>Manage Doctors</h1>
    <?php if (!empty($message)) echo "<p class='message'>$message</p>"; ?>

    <h2>Add Doctor</h2>
    <form action="" method="POST">
      <label for="fname">Doctor First Name:</label>
      <input type="text" id="fname" name="fname" required>

      <label for="lname">Doctor Last Name:</label>
      <input type="text" id="lname" name="lname" required>

      <label for="pwd">Password:</label>
      <input type="text" id="pwd" name="pwd" required>

      <label for="specialization">Specialization:</label>
      <input type="text" id="specialization" name="specialization" required>

      <label for="email">Doctor Email:</label>
      <input type="email" id="email" name="email" required>

      <button type="submit" name="addDoctor">Add Doctor</button>
    </form>

    <h2>Remove Doctor</h2>
    <form action="" method="POST">
      <label for="remove_email">Doctor Email:</label>
      <input type="email" id="remove_email" name="remove_email" required>

      <button type="submit" name="removeDoctor">Remove Doctor</button>
    </form>
  </div>
  <footer>
      <div class="copyright">
        <p id="copyright">&copy;2025 All rights reserved</p>
      </div>
    </footer>
</body>
</html>
