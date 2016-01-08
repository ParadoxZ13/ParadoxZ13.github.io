<?php include "header.inc";
   
  $con = mysql_connect("localhost", "root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  
  $search = $_POST["search"];
  
  mysql_select_db("jobs", $con) or die('derp');

$query = "SELECT * FROM tbljob WHERE JobTitle = '$search' ";

$result = mysql_query($query) or die('Error' .mysql_error());
$row = mysql_fetch_row($result);


echo "check " .$search ."</br>";
echo $row;
echo "Job Title: " .$result[1] ."</br>";
echo "Job Description:" .$result[2] ."</br>";
echo "Job Start Date:" .$result[3] ."</br>";
if ($result[4] == NULL) {
    echo "Computer Password: N/A" ;
    } else {
    echo "Computer Password:" .$result[4] ."</br>"; 
    }
echo "Job Due Date:" .$result[5] ."</br>"; 
echo "Job Priority:" .$result[6] ."</br>";      