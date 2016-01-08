<?php include "header.php"; 

$con = mysql_connect("localhost", "root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$code = $_POST["code"];

mysql_select_db("laptop_database", $con) or die('derp');

$query = "SELECT * FROM tblAsset WHERE AssetID = '$code'";

$result = mysql_query($query) or die('Error' .mysql_error());
$row = mysql_fetch_row($result);
$pass = mysql_num_rows($result);
//while ($row = mysql_fetch_row($result)){
  
  if ($pass >0) {
    echo "Asset Number: $row[0]</br>";
    echo "Asset Name: $row[2]</br>";
    echo "Asset Status: $row[3]";
  }
else
  {
  echo "Asset could not be found";
  }
  
echo "</br></br> <a href='assetcheck.php'>Return</a>"
//}
?>
