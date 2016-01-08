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
  <body>
  <?php
  echo "<a tabindex='2' href='landing.php'><img src='Apollo Logo.png'></a>";
  unset($_SESSION['user']);
  unset($_SESSION['admin']);
  echo "</br>" ;
  echo "You have successfully logged out.</br>";
  echo "<a tabindex='1' href='index.php'>Return</a>";
  
  ?>