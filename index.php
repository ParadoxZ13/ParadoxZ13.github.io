<?php session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="style.css" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1250">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <title></title>
  </head>
  <a tabindex="3" href='landing.php'><img src='Apollo Logo.png'></a>
  <?php
  if (isset($_SESSION['user'])) {
  echo "</br>";
  echo "You are already logged in, please click here to return</br>";
  echo "<a href='landing.php'>Return</a>";
  return;
  }
  ?>
  <h1>Sign In</h1>
  Please sign in to use Apollo.
  <form action="passcheck.php" method="post">
  Username: <input tabindex="1" type="text" name="user" /></br>
  Password: <input tabindex="2" type="password" name="pass" /></br>
  <input type="submit" value='Sign In'/>
  </form>
  <body>