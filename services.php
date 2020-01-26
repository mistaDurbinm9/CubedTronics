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
      <div class="but item-active"><a href="services"><u>Ser</u>vices</a></div>
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
    <div class="content services-cont">
      <div class="mac-services">
        <h1>MacBook Services</h1>
        <p>If your MacBook need to be repaired, be sure to send it to us for a quality repair or we won't charge you! Click the button below to get started!</p>
        <img src="images/macbookBig.png" alt="">
        <form action="products/macbookrepair" method="post">
          <button type="submit" name="button">
          Get your MacBook Repaired Now!
          <div class="round">
            <div id="cta">
              <span class="arrow primera next "></span>
              <span class="arrow segunda next "></span>
            </div>
          </div>
        </button>
        </form>
      </div>

      <div class="console-list">
        <div class="console-services">
          <h1>Console Services</h1>
          <p>Wether your game console has become faulty and needs to be repaired, or you would like to upgrade your existing hardware, you can rest assured we will do everything in our ability to provide you with quality service to get you up and running again. Below is a list of game consoles that we service, select your console and you will be brought to a page with all the services we offer for each console.</p>
        </div>
        <h1><center>Which console do you own?<center></h1>
          <div class="selectconsole">
            <div class="xboxs">
              <a href="products/xboxone">
                <div class="console">
                  <img src="/images/xboxOne.png" alt=""> <p style="font-size:1.2vw;">Xbox One Original</p>
                </div>
              </a>
              <a href="products/xboxones">
              <div class="console">
                <img src="/images/xboxOneS.png" alt=""> <p style="font-size:1.2vw;">Xbox One S</p>
              </div>
              </a>
              <a href="products/xboxonex">
              <div class="console">
                <img src="/images/xboxOneX.png" alt=""> <p style="font-size:1.2vw;">Xbox One X</p>
              </div>
              </a>
            </div>
            <div class="ps4s">
              <a href="products/ps4">
              <div class="console">
                <img src="/images/ps4.png" alt=""> <p style="font-size:1.2vw;">Ps4 Original</p>
              </div>
              </a>
              <a href="products/ps4slim">
              <div class="console">
                <img src="/images/ps4slim.png" alt=""> <p style="font-size:1.2vw;">Ps4 Slim</p>
              </div>
              </a>
              <a href="products/ps4pro">
              <div class="console">
                <img src="/images/ps4Pro.png" alt=""> <p style="font-size:1.2vw;">Ps4 Pro</p>
              </div>
              </a>
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
