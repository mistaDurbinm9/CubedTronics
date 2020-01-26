<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="https://www.cubedtronics.com/favicon.ico">
  <link rel="stylesheet" href="css/style_main.css">
  <link rel="stylesheet" href="css/slideshow.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
  <script type="text/javascript" src="js/javaScript.js"></script>
  <script type="text/javascript" src="js/slideshow.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Londrina+Solid&display=swap" rel="stylesheet">
  <title>Cubed Tronics Consumer Electronic Repair</title>
</head>
<body>

  <svg id="fader"></svg>
  <script>
  fadeInPage();
  </script>


  <div class="head">
    <div class="logo item-active"><a href="index"> <img src="images/logo.png" alt="Cubed Tronics Logo"> </a></div>
    <div class="nav">
      <div class="but item"><a href="services">Services</a></div>
      <div class="but item"><a href="store">Store</a></div>
      <div class="but item"><a href="faq">FAQ</a></div>
      <div class="but item"><a href="contact">Contact</a></div>
      <?php

      // $navName = $_SESSION["userUid"];
      //
      // if(isset($_SESSION['userId'])) {
      //   echo ('<div class="but item">
      //   <button value="Add" onclick="slideDownProfile()" class="login-button"><i> Profile </i> &#11205;</button>
      //   </div>');
      // }else{
      //   echo '<div class="but item">
      //   <button value="Add" onclick="slideDownLogin()" class="login-button"><i>Login</i> &#11205;</button>
      //   </div>';
      // }
      ?>

    </div>
  </div>

  <div class="login">
    <?php
    if (isset($_SESSION['userId'])) {
      echo '
      <form class="" action="cart" method="post">
      <button type="submit" name="cart">My Cart</button>
      </form>
      <form class="" action="includes/logout.inc.php" method="post">
      <button type="submit" name="logout-submit">Log Out</button>
      </form>
      ';
    }else{
      echo '<form action="includes/login.inc.php" method="post">
      <input type="text" name="mailuid" placeholder="Username/Email... ">
      <input type="password" name="pwd" placeholder="Password... "><br>
      <button type="submit" name="login-submit">Log In</button>
      </form>
      <p>-OR-</p>
      <form class="" action="signup" method="post">
      <button type="submit" name="signup-submit">Register</button>
      </form>';
    }
    ?>
  </div>

  <div class="slideshow-wrap">
    <div class="overlay"></div>
    <div class="slideshow">
      <div class="slider">
        <div class="slider-content">
          <h1>Xbox One, PS4 & <br>MacBook Repair</h1>
          <form action="services" method="post">
            <button type="submit" name="button">
            Ship your Product Now!
            <div class="round">
              <div id="cta">
                <span class="arrow primera next "></span>
                <span class="arrow segunda next "></span>
              </div>
            </div>
          </button>
          </form>
        </div>
        <img src="images/image1.png" alt="image1">
      </div>
      <div class="slider">
        <div class="slider-content">

        </div>
        <img src="images/image2.png" alt="image2">
      </div>
      <div class="slider">
        <div class="slider-content">

        </div>
        <img src="images/image3.png" alt="image3">
      </div>
    </div>
  </div>

  <div class="content-wrapper">
    <div class="content">
      <div class="quick-links">
        <div class="link">
          <div class="link-image">

          </div>
          <div class="link-desc">
            Know how to fix consoles and laptops
          </div>
        </div>
        <div class="link">
          <div class="link-image">

          </div>
          <div class="link-desc">
            Specialized tools and quality Parts
          </div>
        </div>
        <div class="link">
          <div class="link-image">

          </div>
          <div class="link-desc">
            Warranty (take pride give ability to warranty)
          </div>
        </div>
        <div class="link">
          <div class="link-image">

          </div>
          <div class="link-desc">
            Any questions? Contact us here.
          </div>
        </div>
      </div>
      <div class="ship-info">
        <h1>Need help with how to ship your console or laptop to us?</h1>
        <div class="ship-steps">
          <div class="ship-step">
            <img src="" alt="">
            <h2>STEP ONE</h2>
          </div>
          <div class="ship-step">
            <img src="" alt="">
            <h2>STEP TWO</h2>
          </div>
          <div class="ship-step">
            <img src="" alt="">
            <h2>STEP THREE</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="foot">
    <div class="foot-copyright">
      &copy; Copyright Cubed Tronics 2020
    </div>
    <div class="social-foot">
      <a href="https://www.instagram.com/cubedtronics"><img src="images/instagram.png" alt="insta"></a>
      <a href="https://www.fb.me/cubedtronics"><img src="images/facebook.png" alt="fb"></a>
    </div>
    <div class="foot-links">
      <div class="foot-link"><a href="index">Home</a></div>
      <div class="foot-link"><a href="services">Services</a></div>
      <div class="foot-link"><a href="store">Store</></div>
      <div class="foot-link"><a href="faq">FAQ</a></div>
      <div class="foot-link"><a href="contact">Contact</a></div>
    </div>
  </div>
</body>
</html>
