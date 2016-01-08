<?php
  session_start();
  echo "<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN'>";
  echo "<html>";
  echo "<head>";
  echo "<link rel='stylesheet' type='text/css' href='style.css' />";
  echo "<meta http-equiv='content-type' content='text/html; charset=windows-1250'>";
  echo "<title>Apollo Job Filling and Laptop Booking System</title>";
  echo "</head>";
  echo "<body>";
  echo "<div class='bound'>";

if(!isset($_SESSION['user'])) {
   echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
}

echo "<a href='landing.php'><img src='Apollo Logo.png'></a>";
echo "<div class='logout'>You are logged in as " . $_SESSION['user'] .".</br> <a href='/apollo/logout.php'>Logout</a></div>";
?>