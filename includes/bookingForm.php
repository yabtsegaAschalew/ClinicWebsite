<?php
  require_once "dbh.inc.php";


  $err = "";
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
      header("Location:../index.php");
      exit();
    } else {
      header("Location:book.php?error=" . urlencode(mysqli_error($conn)));
      exit();
    }

    mysqli_stmt_close($stmt);
  }
?>