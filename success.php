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
  <script src="https://mcapi.us/scripts/minecraft.js"></script>
  <script type="text/javascript" src="js/javaScript.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Londrina+Solid&display=swap" rel="stylesheet">
  <title>Cubed Tronics</title>
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
        //     <button value="Add" onclick="slideDownProfile()" class="login-button"><i> Profile </i> &#11205;</button>
        //   </div>');
        // }else{
        //   echo '<div class="but item">
        //     <button value="Add" onclick="slideDownLogin()" class="login-button"><i>Login</i> &#11205;</button>
        //   </div>';
        // }
       ?>

    </div>
  </div>

  <div class="login">
    <?php
      // if (isset($_SESSION['userId'])) {
      //   echo '
      //         <form class="" action="cart.php" method="post">
      //           <button type="submit" name="cart">My Cart</button>
      //         </form>
      //         <form class="" action="includes/logout.inc.php" method="post">
      //           <button type="submit" name="logout-submit">Log Out</button>
      //         </form>
      //   ';
      // }else{
      //   echo '<form action="includes/login.inc.php" method="post">
      //     <input type="text" name="mailuid" placeholder="Username/Email... ">
      //     <input type="password" name="pwd" placeholder="Password... "><br>
      //     <button type="submit" name="login-submit">Log In</button>
      //   </form>
      //   <p>-OR-</p>
      //   <form class="" action="signup.php" method="post">
      //     <button type="submit" name="signup-submit">Register</button>
      //   </form>';
      // }
    ?>

  </div>

  <div class="content-wrapper">
    <div class="content">
      <div class="success-cont">
        <h1 class="item-active">Success!</h1>
        <p>Thank you for submitting your request. A technican will be in contact with you within 24 Hours to confirm. All you have to do now is ship your device to us, you can find the steps to do so below. Turnaround time can vary per product and type of repair. Game console repairs can take 1-3 days, Macbook repairs can take anywhere between 3 days up to 3 weeks.
           If you have any questions or comments, please feel free to contact us at help@cubedtronics.com.<br>
        </p>
        <!-- <small>Note: We do not service devices that have been worked on before. If we recieve a device that has been attempted to be repaired before, we will Invoice you for shipping costs and send it back. If shippings costs are not paid within 40 days, we will recycle your device.</small> -->
        <br><br><br><br><br><br><br>
      </div>
      <div class="ship-info">
        <h1>Need help with how to ship your device to us?</h1>
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
      <a href="https://www.youtube.com/channel/UCojtAwhKqHXG6fCYI5zdiEA"><img src="images/youtube.png" alt="yt"></a>
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
