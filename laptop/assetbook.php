<?php include "header.php";  

$con = mysql_connect("localhost", "root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$Code = $_POST["code"];
$_SESSION['Code'] = $Code;
 
mysql_select_db("laptop_database", $con) or die('derp');
$query1 = "SELECT * FROM tblAsset WHERE AssetID = '$Code'";
$result1 = mysql_query($query1) or die('Error' .mysql_error());

$row = mysql_fetch_row($result1);
$pass = mysql_num_rows($result1);

 if ($pass >0) {
 if ($row[3] == "Available"){
    echo '<form action="bookout.php" method="post">';
    echo 'Student ID: <input type="text" name="student" /></br>';
    echo '<input type="submit" />';
    echo '</form>';
   }
 else{
  $query3 = "UPDATE  `laptop_database`.`tblasset` SET  `AssetStatus` =  'Available' WHERE  `tblasset`.`AssetID` =  $Code;";  
  $result3 = mysql_query($query3) or die('Error' .mysql_error());
  echo "Asset $Code sucessfully returned.";
  session_destroy();
 }
 
 }
 else {
 echo "Asset not found";
  }
echo "</br></br><a href='booking.php'>Return to Booking page</a>";