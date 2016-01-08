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
  <a tabindex='2' href='landing.php'><img src='Apollo Logo.png'></a>
  <?php
$con = mysql_connect("localhost", "root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$username = $_POST["user"];
$password = $_POST["pass"];

mysql_select_db("jobs", $con) or die('derp');

$query = "SELECT * FROM tblWorker WHERE WorkerUsername = '$username' AND WorkerPassword = '$password'";

$result = mysql_query($query) or die('Error' .mysql_error());
$row = mysql_fetch_row($result);
$pass = mysql_num_rows($result);

 if ($pass >0){
      $_SESSION['user'] = $username; 
      $_SESSION['admin'] = $row[6];
      
      echo "</br>";
      echo "Succesfully logged in as ". $_SESSION['user'] . "</br>";
      echo "<a tabindex='1' href='landing.php'>Click here to continue </a>";
      
      }
  else {
  echo "</br>";
  echo "Incorrect username and/or password.</br>";
  echo "<a tabindex='1' href='index.php'>Please click here to try again.</a>";
  }

?>      