<?php include "header.php"; 

$con = mysql_connect("localhost", "root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$Name = $_POST["client"];

mysql_select_db("jobs", $con) or die('derp');

$query = "SELECT * FROM tblClient WHERE ClientID = '$Name'";

$result = mysql_query($query) or die('Error' .mysql_error());
$row = mysql_fetch_row($result);
$pass = mysql_num_rows($result);
//while ($row = mysql_fetch_row($result)){
  
  if ($pass >0) {
    echo "Client Name: $row[1]</br>";
    echo "Client Contact: $row[2]</br>";
    echo "Client Email: $row[3]</br>";
  }
else
  {
  echo "Client could not be found";
  }
  
echo "</br></br> <a href='clientreview.php'>Return</a>"
//}
?>
