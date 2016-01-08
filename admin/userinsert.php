<?php include "header.php"; 

$con = mysql_connect("localhost", "root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$FName = $_POST["FName"];
$LName = $_POST["LName"];
$Contact = $_POST["Contact"];
$Username = $_POST["Username"];
$Password = $_POST["Password"];
if(isset($_POST["Admin"])){
  $Admin = 1;}
else {
  $Admin = 0;}
       


if ($FName == NULL && $LName == NULL && $Username == NULL && $Password == NULL){
  echo "Required fields are not filled";
  }
else{
mysql_select_db("jobs", $con) or die('derp');

$query1 = "SELECT * FROM tblworker WHERE WorkerFName = '$FName' AND WorkerLName = '$LName' AND WorkerUsername ='$Username'";

$result1 = mysql_query($query1) or die('Error' .mysql_error());
$row1 = mysql_fetch_row($result1);


if ($row1[1] == $FName && $row[2] == $LName && $row1[5] == $Username) {
  echo "Worker already exists";
  }
  else {
    
   $query2 = "INSERT INTO tblworker (WorkerFName, WorkerLName, WorkerPhContact, WorkerUsername, WorkerPassword, WorkerAdmin) VALUES ('$FName', '$LName', '$Contact', '$Username', '$Password', '$Admin')";
   
  $result2 = mysql_query($query2) or die('Error' .mysql_error());
  
  echo "User succesfully entered into the database"; 
  }
  
  }
  
echo "</br></br> <a href='useradd.php'>Add another student</a>";
echo "</br><a href='index.php'>Return to main</a>";
//}  
?>