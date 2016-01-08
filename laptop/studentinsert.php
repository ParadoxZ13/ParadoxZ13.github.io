<?php include "header.php"; 

$con = mysql_connect("localhost", "root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$ID = $_POST["ID"];
$FName = $_POST["FName"];
$LName = $_POST["LName"];
$Contact = $_POST["Contact"];
$Email = $_POST["Email"];
$Course = $_POST["Course"];

if ($ID == NULL && $FName == NULL && $LName == NULL){
  echo "Required fields are not filled";
  }
else{
mysql_select_db("laptop_database", $con) or die('derp');

$query1 = "SELECT * FROM tblStudent WHERE StudentFName = '$FName' AND StudentLName = '$LName'";

$result1 = mysql_query($query1) or die('Error' .mysql_error());
$row1 = mysql_fetch_row($result1);

if ($row1[1] == $FName && $row1[2] == $LName) {
  echo "Student already exists";
  }
  else {
    
  $query2 = "INSERT INTO `laptop_database`.`tblstudent` (`StudentID`, `StudentFName`,
    `StudentLName`, `StudentContact`, `StudentEmail`, `StudentCourse`) 
    VALUES ('$ID', '$FName', '$LName', '$Contact', '$Email', '$Course');";

  $result2 = mysql_query($query2) or die('Error' .mysql_error());
  
  echo "Student succesfully entered into the database"; 
  }
  }
  
echo "</br></br> <a href='studentadd.php'>Add another student</a>";
echo "</br><a href='index.php'>Return to main</a>";
//}
?>