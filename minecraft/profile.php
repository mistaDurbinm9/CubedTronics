<?php
  
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style_main.css">
  <link rel="stylesheet" href="css/profile-style.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="https://mcapi.us/scripts/minecraft.js"></script>
  <script type="text/javascript" src="js/javaScript.js"></script>
  <script type="text/javascript" src="js/profile-scripts.js"></script>
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
      <div class="but item"><a href="index.html">Home</a></div>
      <div class="but item"><a href="forum.html">Forum</a></div>
      <div class="but item"><a href="shop.html">Shop</a></div>
      <div class="but item-active"><a href="profile.html"><u>Prof</u>ile</a></div>
    </div>
  </div>
  <div class="content-wrapper">
    <div class="content">
      <div class="profile-content">
        <div class="profile-image"><img src="https://minotar.net/avatar/notch.png" alt="ProfileImage" /></div>
        <div class="profile-settings">
          <div class="setting active-setting"> <h2><u>My Pro</u>file</h2> </div>
          <div class="setting" id="info"> <h2>Info</h2>
            <div class="dropdown" id="info-dropdown">
              <div class="dropdown-item" id="info-dropdown-item"> <h2>Date Joined: MM/DD/YYYY</h2> </div>
              <div class="dropdown-item"> <h2>Number of Forum Posts: ##</h2> </div>
              <div class="dropdown-item"> <h2></h2> </div>
            </div>
          </div>
          <div class="setting"><h2>Stats</h2></div>
        </div>
      </div>
      <div class="updates">
        <div class="updates-content">
          <p>CubedPotato</p>
        </div>
      </div>
    </div>
  </div>
  <div class="foot">

  </div>
</body>
</html>
