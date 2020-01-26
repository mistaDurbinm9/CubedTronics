<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="https://www.cubedtronics.com/favicon.ico">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="../css/style_main.css">
  <link rel="stylesheet" href="../css/slideshow.css">
  <link rel="stylesheet" href="../css/contact-style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
  <script src="https://mcapi.us/scripts/minecraft.js"></script>
  <script type="text/javascript" src="../js/javaScript.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Londrina+Solid&display=swap" rel="stylesheet">
  <title>Cubed Tronics Consumer Electronic Repair</title>
</head>
<body>

  <svg id="fader"></svg>
  <script>
            fadeInPage();
        </script>


  <div class="head">
      <div class="logo item-active"><a href="../index"> <img src="../images/logo.png" alt="Cubed Tronics Logo"> </a></div>
    <div class="nav">
      <div class="but item-active"><a href="../services"><u>Ser</u>vices</a></div>
      <div class="but item"><a href="../store">Store</a></div>
      <div class="but item"><a href="../faq">FAQ</a></div>
      <div class="but item"><a href="../contact">Contact</a></div>
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
      <div class="product-form">
          <div class="product-title">
            <div class="prodtext">
              <h1 class="item-active"><u>MacBook Rep</u>air</h1>
              <p>Fill out the form below if you would like to send your MacBook to us for repair.</p>
              <form class="contact-form" action="../includes/send.mail.inc.php" method="post">
                <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
                <input type="text" name="firstname" maxlength="50" placeholder="First Name" required/><input type="text" name="lastname" maxlength="50" placeholder="Last Name" required/>
                <input type="email" name="uid-email" maxlength="50" placeholder="Email Address" required/>
                <input type="text" name="device" maxlength="50" placeholder="What device do you have?" required/>
                <p>Please describe what is wrong with your machine in detail below.</p>
                <textarea id="message" name="message" maxlength="1000" cols="25" rows="6" placeholder="Message..." required></textarea><br>
                <button type="submit" name="submit-form">Submit</button>
              </form>
            </div>
          </div>
          <div class="prodimg">
            <img src="images/macbookBig.png" alt="Mac Book">
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
      <a href="https://www.instagram.com/cubedtronics"><img src="../images/instagram.png" alt="insta"></a>
      <a href="https://www.fb.me/cubedtronics"><img src="../images/facebook.png" alt="fb"></a>
    </div>
    <div class="foot-links">
      <div class="foot-link"><a href="../index">Home</a></div>
      <div class="foot-link"><a href="../services">Services</a></div>
      <div class="foot-link"><a href="../store">Store</></div>
      <div class="foot-link"><a href="../faq">FAQ</a></div>
      <div class="foot-link"><a href="../contact">Contact</a></div>
    </div>
  </div>
</body>
</html>
