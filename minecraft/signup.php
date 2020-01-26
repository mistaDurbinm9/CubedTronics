<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style_main.css">
  <link rel="stylesheet" href="css/signup-style.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
  <script src="https://mcapi.us/scripts/minecraft.js"></script>
  <script type="text/javascript" src="js/javaScript.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Londrina+Solid&display=swap" rel="stylesheet">
  <title>serverWebsite</title>
</head>
<body>
  <svg id="fader"></svg>
    <script>
            fadeInPage();
        </script>

  <div class="head">
    <div class="logo">Cubed Potato Logo</div>
    <div class="nav">
      <div class="but item"><a href="index.php">Home</a></div>
      <div class="but item"><a href="forum.php">Forum</a></div>
      <div class="but item"><a href="shop.php">Shop</a></div>
      <div class="but item-active"><a href="signup.php"><u>Login/Reg</u>ister</a></div>
    </div>
  </div>



  <div class="content-wrapper">

    <?php
      if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyfields") {
          echo '<div class="notif bad-notif">You have to fill in all the fields!</div>';
        }else if ($_GET['error'] == "invaliduidmail") {
          echo '<div class="notif bad-notif">Invalid username and e-mail!</div>';
        }else if ($_GET['error'] == "invaliduid") {
          echo '<div class="notif bad-notif">Invalid username!</div>';
        }else if ($_GET['error'] == "invalidmail") {
          echo '<div class="notif bad-notif">Invalid e-mail!</div>';
        }else if ($_GET['error'] == "passwordcheck") {
          echo '<div class="notif bad-notif">Your passwords do not match!</div>';
        }else if ($_GET['error'] == "usertaken") {
          echo '<div class="notif bad-notif">Username is already taken!</div>';
        }else if ($_GET['error'] == "wrongpwd") {
          echo '<div class="notif bad-notif">Incorrect password!</div>';
        }else if ($_GET['error'] == "nouser") {
          echo '<div class="notif bad-notif">Incorrect username!</div>';
        }
      }else if ($_GET['signup'] == "success") {
        echo '<div class="notif good-notif">You have successfully been registered!</div>';
      }
    ?>

    <div class="content">
      <div class="register-contain">
        <div class="page">
          <button class="option" type="button" name="register-option"><u>Regis</u>ter</button> <h3>&#9474;</h3> <button class="option" type="button" name="login-option">Login</button>
        </div>
        <div class="form-option">
          <div id='register'>
            <form class="register-option" action="includes/signup.inc.php" method="post">
              <input type="text" name="uid" placeholder="Username">
              <input type="text" name="mail" placeholder="E-mail">
              <input type="password" name="pwd" placeholder="Password">
              <input type="password" name="pwd-repeat" placeholder="Repeat Password"><br>
              <button type="submit" name="signup-submit">Register</button>
            </form>
          </div>
          <div id='login'>
            <form class="login-option" action="includes/signup.login.inc.php" method="post">
              <input type="text" name="mailuid" placeholder="Username/Email... ">
              <input type="password" name="pwd" placeholder="Password... "><br>
              <button type="submit" name="login-submit">Log In</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="foot">

  </div>
</body>
</html>
