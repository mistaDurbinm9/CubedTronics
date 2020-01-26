<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style_main.css">
  <link rel="stylesheet" href="css/slideshow.css">
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
      <div class="but item-active"><a href="index.php"><u>Ho</u>me</a></div>
      <div class="but item"><a href="forum.php">Forum</a></div>
      <div class="but item"><a href="shop.php">Shop</a></div>
      <?php

        $navName = $_SESSION["userUid"];

        if(isset($_SESSION['userId'])) {
          echo ('<div class="but item">
            <button value="Add" onclick="slideDownProfile()" class="login-button"><i>' . $navName . '</i> &#11205;</button>
          </div>');
        }else{
          echo '<div class="but item">
            <button value="Add" onclick="slideDownLogin()" class="login-button"><i>Login/Register</i> &#11205;</button>
          </div>';
        }
       ?>

    </div>
  </div>

  <div class="login">
    <?php
      if (isset($_SESSION['userId'])) {
        echo '<form class="" action="includes/logout.inc.php" method="post">
          <button type="submit" name="logout-submit">Log Out</button>
        </form>';
      }else{
        echo '<form action="includes/login.inc.php" method="post">
          <input type="text" name="mailuid" placeholder="Username/Email... ">
          <input type="password" name="pwd" placeholder="Password... "><br>
          <button type="submit" name="login-submit">Log In</button>
        </form>
        <p>-OR-</p>
        <form class="" action="signup.php" method="post">
          <button type="submit" name="signup-submit">Register</button>
        </form>';
      }
    ?>

  </div>



  <div class="">
    <div class="slideshow-contain">
      <?php
        if (isset($_SESSION['userId'])) {
          echo '<div class="good-notif notif">You are logged in!</div>';
        }else if ($_GET['error'] == "wrongpwd") {
          echo '<div class="notif bad-notif">Incorrect password!</div>';
        }else if ($_GET['error'] == "nouser") {
          echo '<div class="notif bad-notif">Incorrect username!</div>';
        }else{
          echo '<div class="notif bad-notif">You are logged out.</div>';
        }
      ?>

      <div class="sp-slideshow">

      	<input id="button-1" type="radio" name="radio-set" class="sp-selector-1" checked="checked" />
      	<label for="button-1" class="button-label-1"></label>

      	<input id="button-2" type="radio" name="radio-set" class="sp-selector-2" />
      	<label for="button-2" class="button-label-2"></label>

      	<input id="button-3" type="radio" name="radio-set" class="sp-selector-3" />
      	<label for="button-3" class="button-label-3"></label>

      	<input id="button-4" type="radio" name="radio-set" class="sp-selector-4" />
      	<label for="button-4" class="button-label-4"></label>

      	<input id="button-5" type="radio" name="radio-set" class="sp-selector-5" />
      	<label for="button-5" class="button-label-5"></label>

      	<label for="button-1" class="sp-arrow sp-a1"></label>
      	<label for="button-2" class="sp-arrow sp-a2"></label>
      	<label for="button-3" class="sp-arrow sp-a3"></label>
      	<label for="button-4" class="sp-arrow sp-a4"></label>
      	<label for="button-5" class="sp-arrow sp-a5"></label>

      	<div class="sp-content">
      		<div class="sp-parallax-bg"></div>
      		<ul class="sp-slider clearfix">
      			<li><img src="images/image1.png" alt="image01" /></li>
      			<li><img src="images/image2.png" alt="image02" /></li>
      			<li><img src="images/image3.png" alt="image03" /></li>
      			<li><img src="images/image4.png" alt="image04" /></li>
      			<li><img src="images/image5.png" alt="image05" /></li>
      		</ul>
      	</div><!-- sp-content -->

      </div><!-- sp-slideshow -->
    </div>
  </div>

  <div class="content-wrapper">
    <div class="content">
      <div class="updates">
        <div class="updates-content">
          <p>CubedPotato</p>
        </div>
      </div>
      <div class="server-status">
        <div class="icon"><img src="https://pbs.twimg.com/profile_images/808180587605331969/u-CULTwl_400x400.jpg" id="favicon"></div>
        <div class="header">
          <div class="image"> <img src="grass.jpg" alt="" /> </div>
          <h2>play.cubedpotato.com</h2>
        </div>
        <div id="rest">Loading ...</div>
      </div>
    </div>
  </div>
  <div class="foot">

  </div>
</body>
</html>
