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
  <link rel="stylesheet" href="../fancybox/jquery.fancybox.css" type="text/css" media="screen" />
  <script type="text/javascript" src="../fancybox/jquery.fancybox.pack.js"></script>
  <script src="https://mcapi.us/scripts/minecraft.js"></script>
  <script type="text/javascript" src="../js/javaScript.js"></script>
  <script type="text/javascript" src="js/prod_scripts.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Londrina+Solid&display=swap" rel="stylesheet">
  <title>serverWebsite</title>
</head>
<body>

  <div class="modal" name="hdd_modal">
    <div class="modal-content animate-top">
      <span class="close">&times;</span>
      <h1>HDD Repair</h1>
      <div class="modal-list">
        <div class="modal-list-item">&#8226; 100% Guaranteed High Quality OEM Replacement Parts Used</div>
        <div class="modal-list-item">&#8226; We have the ability to fix 99% of Hard Disc Drive issues, including replacement (if needed.)</div>
        <div class="modal-list-item">&#8226; Free Return Shipping, you ship it to us and we pay to ship it back!</div>
        <div class="modal-list-item">&#8226; 60-day Warranty</div>
      </div>
      <p>Sometimes your Xbox One S's Hard Disc Drive shows an error when trying to boot up (e.g. E102, E106, E101, ect.) This can either be a software problem or caused by physical damage to your drive. We can fix 99% of these errors and use reliable OEM replacement parts. Bring your console back to life by sending it in now!</p>
    </div>
  </div>

  <div class="modal" name="hdmi_modal">
    <div class="modal-content animate-top">
      <span class="close">&times;</span>
      <h1>HDMI Repair</h1>
      <p>hdmi modal</p>
    </div>
  </div>

  <div class="modal" name="overheat_modal">
    <div class="modal-content animate-top">
      <span class="close">&times;</span>
      <h1>Overheating Repair</h1>
      <p>overheat modal</p>
    </div>
  </div>

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
    //   <button value="Add" onclick="slideDownProfile()" class="login-button"><i> Profile </i> &#11205;</button>
    //   </div>');
    // }else{
    //   echo '<div class="but item">
    //   <button value="Add" onclick="slideDownLogin()" class="login-button"><i>Login</i> &#11205;</button>
    //   </div>';
    // }
    // ?>

  </div>
</div>

<div class="login">
  <?php
  if (isset($_SESSION['userId'])) {
    echo '
    <form class="" action="../cart" method="post">
    <button type="submit" name="cart">My Cart</button>
    </form>
    <form class="" action="../includes/logout.inc.php" method="post">
    <button type="submit" name="logout-submit">Log Out</button>
    </form>
    ';
  }else{
    echo '<form action="../includes/login.inc.php" method="post">
    <input type="text" name="mailuid" placeholder="Username/Email... ">
    <input type="password" name="pwd" placeholder="Password... "><br>
    <button type="submit" name="login-submit">Log In</button>
    </form>
    <p>-OR-</p>
    <form class="" action="../signup" method="post">
    <button type="submit" name="signup-submit">Register</button>
    </form>';
  }
  ?>

</div>

<div class="content-wrapper">
  <div class="content">
    <div class="product-form">
        <div class="product-title">
          <div class="prodtext">
            <h1 class="item-active"><u>Xbox One S Rep</u>air</h1>
            <p>Select repair(s) needed along with your name, email, and any additional comments. </p>
            <form class="contact-form" action="../includes/send.mail.inc.php" method="post">
              <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
              <div class="repair_opt">
                <label class="container"> HDD Repair - $99.99
                  <input type="checkbox" name="repair_type[]" value="XboxOneS_hdd_repair" data-id="0">
                  <span class="checkmark"></span>
                </label><br></br>
                <i class="more-info-icon" name="hdd_modal"></i>
              </div>
              <div class="repair_opt">
                <label class="container"> HDMI Repair - $99.99
                  <input type="checkbox" name="repair_type[]" value="XboxOneS_hdmi_repair" data-id="1">
                  <span class="checkmark"></span>
                </label><br></br>
                <i class="more-info-icon" name="hdmi_modal"></i>
              </div>
              <div class="repair_opt">
                <label class="container"> Overheating Repair - $99.99
                  <input type="checkbox" name="repair_type[]" value="XboxOneS_overheat_repair" data-id="2">
                  <span class="checkmark"></span>
                </label><br></br>
                <i class="more-info-icon" name="overheat_modal"></i>
              </div>
              <p id="total">Total: $0.00</p>
              <input type="text" name="name" maxlength="50" placeholder="Your Name" required>
              <input type="email" name="uid-email" maxlength="50" placeholder="Your Email Address" required>
              <textarea id="message" name="message" maxlength="1000" cols="25" rows="6" placeholder="Message..." required></textarea><br>
              <button type="submit" name="submit-form">Submit</button>
            </form>
          </div>
        </div>
        <div class="prodimg">
          <img src="images/xboxOneSBig.png" alt="Xbox One S">
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
