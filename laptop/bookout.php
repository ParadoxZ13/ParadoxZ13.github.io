<?php include "header.php"; 

$con = mysql_connect("localhost", "root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  
$Student = $_POST["student"];
$Code = $_SESSION["Code"];

mysql_select_db("laptop_database", $con) or die('derp');

$query1 = "SELECT `StudentID`, `StudentFName`, `StudentLName`, `StudentContact`, `StudentEmail`, `StudentCourse` FROM `tblstudent` WHERE `StudentID` = '$Student'";
$result1 = mysql_query($query1) or die('Error' .mysql_error());

$row = mysql_fetch_row($result1);
$pass = mysql_num_rows($result1);
//while ($row = mysql_fetch_row($result)){
  
  if ($pass >0) {
    $query2 = "UPDATE  `tblasset` SET  `AssetStatus` =  'Unavailable' WHERE  `tblasset`.`AssetID` ='$Code'";
    $result2 = mysql_query($query2) or die('Error' .mysql_error());
    
    $imageurl = "img\\$row[1].$row[2].bmp";
    $blank = "img\\no_bio_image.bmp";
    if (file_exists($imageurl)) {  
      echo "<img src=$imageurl></br>";
      }
    else {
      echo "<img src=$blank></br>";
      }
    echo "Laptop successfully booked out to $row[1] $row[2]!";
  }
else
  {
  echo "Student could not be found";
  }
  
session_destroy();
echo "</br></br> <a href='booking.php'>Return</a>";
?>