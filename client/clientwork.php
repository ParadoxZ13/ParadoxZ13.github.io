<?php  include "header.php"; 

$client = $_POST['client'];
$con = mysql_connect("localhost", "root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  
mysql_select_db("jobs", $con) or die('derp');

$query1 = "SELECT * FROM tbljob WHERE ClientID = '$client'";
$result1 = mysql_query($query1) or die('Error' .mysql_error());


$howmany = (mysql_num_rows($result1));
if ($howmany == 0) {
  echo 'No outstanding jobs for this client';
  } else 
  {while ($row = mysql_fetch_array($result1)) {
  echo "<table border='1'>
  <tr><td>Job:</td><td>
  " . $row[1] . "
  </td></tr><tr><td>Description:</td><td>
  " . $row[2] . "
  </td></tr><tr><td>Computer Password:</td><td>
  " . $row[4] . "
  </td></tr><tr><td>Priority:</td><td>
  " . $row[5] . "
  </td></tr><tr><td>Due Date:</td><td>";
  echo $row[6];
  echo "/"; 
  echo $row[7];
  echo "/";
  echo $row[8];
  echo "</td></tr><tr><td>Category:</td><td>
   " . $row[10] . "</td></tr></table></br>";
   
  }
  }

?>
</br></br> <a href='clientjobs.php'>View other clients' jobs</a>
</br><a href='index.php'>Return to main</a>