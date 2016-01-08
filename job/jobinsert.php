<?php include "header.inc";  

$con = mysql_connect("localhost", "root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$title = $_POST["title"];
$description = $_POST["description"];
if ($_POST["password"] == NULL) {
$password = "N/A";} else {
$password = $_POST["password"];
}
$category = $_POST["category"];
$priority = $_POST["priority"];
$date = $_POST["date"];
$month = $_POST["month"];
$year = $_POST["year"];
$week = $_POST["week"];
$client = $_POST["client"];

if ($title == NULL && $description == NULL && $priority == NULL) {
    echo "Required fields are not filled.";
  } else {
    mysql_select_db("jobs", $con) or die('derp');

$query1 = "SELECT * FROM tbljob WHERE JobTitle = '$title'";

$result1 = mysql_query($query1) or die('Error' .mysql_error());
$row1 = mysql_fetch_row($result1);


if ($row1[1] == $title) {
  echo "This job already exists";
  }
  else {
    
   $query2 = "INSERT INTO tbljob(JobTitle, JobSummary, JobStartDate, JobCompPass, JobPriority, JobDueDate, JobDueMonth, JobDueYear, JobDueweek, JobCategory, ClientID) VALUES ('$title', '$description', now(), '$password', '$priority', '$date', '$month', '$year', '$week', '$category', '$client')";
    
  $result2 = mysql_query($query2) or die('Error' .mysql_error());
  
  echo "Job succesfully entered into the database"; 
  }
  
  }
  
echo "</br></br> <a href='jobadd.php'>Add another job</a>";
echo "</br><a href='index.php'>Return to main</a>";

    
    
?>