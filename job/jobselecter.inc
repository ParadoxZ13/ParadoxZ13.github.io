<?php
$con = mysql_connect("localhost", "root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  
mysql_select_db("jobs", $con) or die('derp'); 
  
echo "<select name='job'>";      
$query1 = "SELECT * FROM tbljob";         

$result1 = mysql_query($query1) or die('Error' .mysql_error());
while ($row1 = mysql_fetch_row($result1)){

echo "<option value=" . $row1[0] . ">" . $row1[1] . "</option>";
}
echo "</select>";
?>