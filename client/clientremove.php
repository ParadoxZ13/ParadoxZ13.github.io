<?php include "header.php";

  $con = mysql_connect("localhost", "root");
if (!$con) {
  die('Could not connect: ' . mysql_error());
}

$Username = $_POST["client"];
$Username = mysql_real_escape_string($Username);

if ($Username == NULL){
  echo "Required fields are not filled";
  }
  else{
    mysql_select_db("jobs", $con) or die('derp');
    $query1 = "SELECT * FROM tblclient WHERE ClientID = '$Username'";
    
    $result1 = mysql_query($query1) or die('Error' .mysql_error());
      $row1 = mysql_fetch_row($result1);


      if ($row1 == NULL) {
        echo "Error: No client found.";
      }
      else if ($row1 <=2) {
        echo "Error: Multiple client found, please refine your search.";
      } else {
      
      $query2 = "DELETE FROM tblclient WHERE ClientID = '$Username'";
      
      $result2 = mysql_query($query2) or die('Error' .mysql_error());
      
      $query3 = "SELECT * FROM tblclient WHERE ClientID = '$Username'";
      $result3 = mysql_query($query3) or die('Error' .mysql_error());
      
      echo "Client successfully removed.";
      
      
    }
  }
echo "</br><a href='index.php'>Return to main</a>";   
