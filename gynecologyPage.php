<?php
require_once "includes/dbh.inc.php";

$stmt = $conn->prepare("SELECT * FROM appointments WHERE appointment_types = ?");
$appointment_type = 'gynecology';
$stmt->bind_param("s", $appointment_type);
$stmt->execute();
$result = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Doctor Dashboard</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="icon" href="images/logo.jpg">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/doctorhomepage.css">

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
          <li><a href="login.php"><button>Logout</button></a></li>
        </ul>
      </div>
      <a id="home"></a>
      <h1 class="welcome-text">Doctor Dashboard</h1>
    </div>
  </header>
  <main>
    <section class="dashboard-content">
      <h2>Your Appointments</h2>
      <table border="1" cellpadding="10" cellspacing="0">
        <thead>
          <tr>
            <th>Patient Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Booked on</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>" . $row['firstName'] . " " . $row['lastName'] . "</td>";
              echo "<td>" . $row['email'] . "</td>";
              echo "<td>" . $row['phone'] . "</td>";
              echo "<td>" . $row['appointment_date'] . "</td>";
              //echo "<td>" . $row['status']. "</td>";
              echo "</tr>";
            }
          } else {
            echo "<tr><td colspan='7'>No appointments found</td></tr>";
          }
          ?>

        </tbody>
      </table>
    </section>
  </main>
  <footer>
    <div class="copyright">
      <p id="copyright">&copy;2025 All rights reserved</p>
    </div>
  </footer>
</body>

</html>