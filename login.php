<?php
  require_once "includes/loginForm.php";
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
      <form action="includes/loginForm.php" method="post" name="login-form" onsubmit="return validateForm()">
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