<?php include "header.php"; 

$con = mysql_connect("localhost", "root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$Name = $_POST["Name"];
$Contact = $_POST["Contact"];
$Email = $_POST["Email"];


if ($Name == NULL){
  echo "Required fields are not filled";
  }
else{
mysql_select_db("jobs", $con) or die('derp');

$query1 = "SELECT * FROM tblclient WHERE ClientName = '$Name'";

$result1 = mysql_query($query1) or die('Error' .mysql_error());
$row1 = mysql_fetch_row($result1);

if ($row1[1] == $Name) {
  echo "Client already exists";
  }
  else {
    
  $query2 = "INSERT INTO `jobs`.`tblclient` (`clientName`, `clientPhContact`, `clientEmail`) VALUES ('$Name', '$Contact', '$Email');";

  $result2 = mysql_query($query2) or die('Error' .mysql_error());
  
  echo "Client succesfully entered into the database"; 
  }
  }
  
echo "</br></br> <a href='clientadd.php'>Add another client</a>";
echo "</br><a href='index.php'>Return to main</a>";
//}
?>