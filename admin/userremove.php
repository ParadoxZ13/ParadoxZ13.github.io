<?php include "header.php";

  $con = mysql_connect("localhost", "root");
if (!$con) {
  die('Could not connect: ' . mysql_error());
}

$Username = $_POST["Username"];
$Username = mysql_real_escape_string($Username);

if ($Username == NULL){
  echo "Required fields are not filled";
  }
  else{
    mysql_select_db("jobs", $con) or die('derp');
    $query1 = "SELECT * FROM tblworker WHERE WorkerUsername = '$Username'";
    
    $result1 = mysql_query($query1) or die('Error' .mysql_error());
      $row1 = mysql_fetch_row($result1);


      if ($row1 == NULL) {
        echo "Error: No user found.";
      }
      else if ($row1 <=2) {
        echo "Error: Multiple users found, please refine your search.";
      } else {
      
      $query2 = "DELETE FROM tblworker WHERE WorkerUsername = '$Username'";
      
      $result2 = mysql_query($query2) or die('Error' .mysql_error());
      
      $query3 = "SELECT * FROM tblworker WHERE WorkerUsername = '$Username'";
      $result3 = mysql_query($query3) or die('Error' .mysql_error());
      $row3 = mysql_fetch_row($result3);
      
      if ($row3 == NULL) {
      echo "An unknown error has occured. Please contact the webmaster.";
      } else {
      echo "User successfully removed.";
      }
      if ($Username == $_SESSION['user']) {
      echo "You have removed your own user. You will be logged out.";
      unset($_SESSION['user']);
      unset($_SESSION['admin']);
      }
    }
  }
echo "</br><a href='/apollo/landing.php'>Return to main</a>";   
