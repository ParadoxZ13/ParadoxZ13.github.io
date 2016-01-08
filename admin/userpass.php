<?php include "header.php";

<?php echo "<div class='logout'>You are logged in as " . $_SESSION['user'] .".</br> <a href='/apollo/logout.php'>Logout</a></div>";
  
 
  $con = mysql_connect("localhost", "root");
if (!$con) {
  die('Could not connect: ' . mysql_error());
}
  
if ($_SESSION['admin'] == 1){ 
  $Username = $_POST["Username"];
} else {
  $Username = $_SESSION['user'];
  }
$Password = $_POST["Password"];

if ($Password == NULL){
  echo "Required fields are not filled";
  }
  else{
    mysql_select_db("jobs", $con) or die('derp');

    if ($_SESSION['admin'] == 1){
      $query1 = "SELECT * FROM tblworker WHERE WorkerUsername = '$Username'";
  
      $result1 = mysql_query($query1) or die('Error' .mysql_error());
      $row1 = mysql_fetch_row($result1);


      if ($row1 == NULL) {
        echo "Error: No user found.";
      }
      else if ($row1 <=2) {
        echo "Error: Multiple users found, please refine your search.";
      } else {
        $query2 = "UPDATE `tblworker` SET `WorkerPassword` = '$Password' WHERE `WorkerUsername` = '$Username' LIMIT 1 ";
  
        $result2 = mysql_query($query2) or die('Error' .mysql_error());
  
        $query3 = "SELECT * FROM tblworker WHERE WorkerPassword ='$Password'";
        $result3 = mysql_query($query3) or die('Error' .mysql_error());
        $row3 = mysql_fetch_row($result3);
  
        if($row3 == NULL) {
          echo "An unknown error has occured. Please contact the webmaster.";
        } else {
          echo "Password successfully updated.";}
        }
  
      } else {
        $query4 = "SELECT * FROM tblworker WHERE WorkerUsername = '$Username'";
        
        $result4 = mysql_query($query4) or die('Error' .mysql_error());
        $row4 = mysql_fetch_row($result4);


      if ($row4 == NULL) {
        echo "Error: No user found.";
      }
      else if ($row4 <=2) {
        echo "Error: Multiple users found, please refine your search.";
      } else {
        $query5 = "UPDATE `tblworker` SET `WorkerPassword` = '$Password' WHERE `WorkerUsername` = '$Username' LIMIT 1 ";
        $result5 = mysql_query($query5) or die('Error' .mysql_error());
        $query6 = "SELECT * FROM tblworker WHERE WorkerPassword ='$Password'";
        $result6 = mysql_query($query6) or die('Error' .mysql_error());
        $row6 = mysql_fetch_row($result6);
  
        if($row6 == NULL) {
          echo "An unknown error has occured. Please contact the webmaster.";
        } else {
          echo "Password successfully updated.";
          }
        }
      }
    }
    if ($_SESSION['admin'] == 1){ 
    echo "</br><a href='index.php'>Return to main</a>";
    } else {
    echo "</br><a href='/apollo/landing.php'>Return to main</a>"; 
    }
?>