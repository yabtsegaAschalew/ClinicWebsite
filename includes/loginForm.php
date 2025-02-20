<?php

  require_once "dbh.inc.php";

  $email = "";
  $pwd = "";
  $err = "";


  if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    $sql = "SELECT * FROM users WHERE Email = ? LIMIT 1;";
    $stmt = mysqli_prepare($conn, $sql);

    if($stmt){
      mysqli_stmt_bind_param($stmt, "s", $email);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      $row = mysqli_fetch_assoc($result);
        if(password_verify($pwd, $row['pwd'])){
          switch($row['role']){
            case 'admin':
              header('Location: ../adminHomePage.php');
              exit();
            case 'cardiology':
                header('Location: ../cardiologyPage.php');
                exit();
            case 'chronic disease':
                header('Location: ../chronicPage.php');
                exit();
            case 'dermatology':
                header('Location: ../dermatologyPage.php');
                exit();
            case 'gynecology':
                header('Location: ../gynecologyPage.php');
                exit();
            case 'orthopedics':
                header('Location: ../orthopedicsPage.php');
                exit();
            case 'pediatrics':
                header('Location: ../pediatricsPage.php');
                exit();
            default:
                $err = "Invalid role.";
          }
        }else{
        $err= " password incorrect ";
        }
      }else{
        echo "User not found";
      }
    }
  

  /*    
  if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    $role = ["admin", "nurse", "cardiology", "chronic disease", "dermatology", "gynecology", "orthopedics", "pediatrics"];
    for ($i = 0; $i < count($role); $i++) {
      
      $sql = "SELECT * FROM users WHERE Email = ? AND pwd = ? AND role = ? LIMIT 1";
      $stmt = mysqli_prepare($conn, $sql);
      mysqli_stmt_bind_param($stmt, "sss", $email, $pwd, $role[$i]);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) == 1 && ($role[$i] == 'admin')) {
          header('location:../adminHomePage.php');
          exit();
        } else if (mysqli_num_rows($result) == 1 && ($role[$i] == 'cardiology')) {
          header('location:../cardiologyPage.php');
          exit();
        }
        else if (mysqli_num_rows($result) == 1 && ($role[$i] == 'chronic disease')) {
          header('location:../chronicPage.php');
          exit();
        }
        else if (mysqli_num_rows($result) == 1 && ($role[$i] == 'dermatology')) {
          header('location:../dermatologyPage.php');
          exit();
        }
        else if (mysqli_num_rows($result) == 1 && ($role[$i] == 'gynecology')) {
          header('location:../gynecologyPage.php');
          exit();
        }
        else if (mysqli_num_rows($result) == 1 && ($role[$i] == 'orthopedics')) {
          header('location:../orthopedicsPage.php');
          exit();
        }
        else if (mysqli_num_rows($result) == 1 && ($role[$i] == 'pediatrics')) {
          header('location:../pediatricsPage.php');
          exit();
        }
        mysqli_stmt_close($stmt);
      }
      } 
    if (empty($email)) {
      $err = "Email is required";
    } else if (empty($pwd)) {
      $err = "Password is required";
    } else {
      $err = "Username or password is incorrect";
    }*/
  