<?php
require_once "dbh.inc.php";

$email = "";
$pwd = "";
$err = "";

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
      header('location:adminHomePage.php');
      exit();
    } else if (mysqli_num_rows($result) == 1 && ($role[$i] == 'cardiology')) {
      header('location:cardiologyPage.php');
      exit();
    }
    else if (mysqli_num_rows($result) == 1 && ($role[$i] == 'chronic disease')) {
      header('location:chronicPage.php');
      exit();
    }
    else if (mysqli_num_rows($result) == 1 && ($role[$i] == 'dermatology')) {
      header('location:dermatologyPage.php');
      exit();
    }
    else if (mysqli_num_rows($result) == 1 && ($role[$i] == 'gynecology')) {
      header('location:gynecologyPage.php');
      exit();
    }
    else if (mysqli_num_rows($result) == 1 && ($role[$i] == 'orthopedics')) {
      header('location:orthopedicsPage.php');
      exit();
    }
    else if (mysqli_num_rows($result) == 1 && ($role[$i] == 'pediatrics')) {
      header('location:pediatricsPage.php');
      exit();
    }
    mysqli_stmt_close($stmt);
  }
  if (empty($email)) {
    $err = "Email is required";
  } else if (empty($pwd)) {
    $err = "Password is required";
  } else {
    $err = "Username or password is incorrect";
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="icon" href="images/logo.jpg">
  <link rel="stylesheet" href="css/lstyle.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/login.js">
  </script>
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
  <div class="wrapper">
    <div class="login">
      <div class="err">
        <?php
          if(!empty($err)) echo $err;
        ?>
      </div>
      <form action="" method="post" name="login-form" onsubmit="return validateForm()">
        <h2>Login</h2>

        <div class="input-field">
          <input type="email" name="email" id="email" required>
          <label>Enter your email</label>
        </div>

        <div class="input-field">
          <input type="password" required name="pwd" id="pwd">
          <label>Enter your password</label>
        </div>


        <div class="forget">
          <label for="remember">
            <input type="checkbox" id="remember">
            <p>Remember me</p>
          </label>
        </div>
        <button type="submit" name="login">Log In</button>
      </form>
    </div>

  </div>
</body>

</html>