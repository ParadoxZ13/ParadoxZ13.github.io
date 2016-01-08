<?php include "header.inc";

$ID = $_POST['job'];

$con = mysql_connect("localhost", "root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  
mysql_select_db("jobs", $con) or die('derp'); 


$query1 = "UPDATE tbljob SET JobStatus = 'Open' WHERE  JobID ='$ID'";
$result1 = mysql_query($query1) or die('Error' .mysql_error());

echo "Job reopened";
echo "</br></br> <a href='jobopen.php'>Reopen another job</a>";
echo "</br><a href='index.php'>Return to main</a>";
?>