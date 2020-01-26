<?php

$servername = "162.241.244.22";
$dBUsername = "cubedpot";
$dBPassword = "6XBE32f565!";
$dBName = "cubedpot_cubedPotatoUsers";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}
