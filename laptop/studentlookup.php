<?php include "header.php"; 

$con = mysql_connect("localhost", "root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$FName = $_POST["FName"];
$LName = $_POST["LName"];

mysql_select_db("laptop_database", $con) or die('derp');

$query = "SELECT * FROM tblStudent WHERE StudentFName = '$FName' AND StudentLName = '$LName'";

$result = mysql_query($query) or die('Error' .mysql_error());
$row = mysql_fetch_row($result);
$pass = mysql_num_rows($result);
//while ($row = mysql_fetch_row($result)){
  
  if ($pass >0) {
    $imageurl = "img\\$row[1].$row[2].bmp";
    $blank = "img\\no_bio_image.bmp";
    if (file_exists($imageurl)) {  
      echo "<img src=$imageurl></br>";
      }
    else {
      echo "<img src=$blank></br>";
      }
    echo "First Name: $row[1]</br>";
    echo "Last Name: $row[2]</br>";
    echo "Class: $row[5]</br>";
    echo "Student ID: $row[0]";
  }
else
  {
  echo "Student could not be found";
  }
  
echo "</br></br> <a href='studentcheck.php'>Return</a>"
//}
?>
