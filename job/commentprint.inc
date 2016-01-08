<?php
echo "</br>";
$job = $_POST["job"];
$query = 'SELECT * FROM tblcomment WHERE JobID LIKE "%' . $job. '%"';
$result = mysql_query($query) or die ('Error in query: $query' . mysql_error());


$howmany = (mysql_num_rows($result));
$i = 0;
if ($howmany == 0) {
  echo 'No current comments';
  } else 
  {while ($row = mysql_fetch_array($result)) {
  echo "<table border='1'>";
  echo "<tr><td>Job:</td><td>";
  include "jobnamegrab.inc";
  echo "</td></tr><tr><td>Commented By:</td><td>";
  include "workercomment.inc";  
  echo "</td></tr><tr><td>Comment Number:</td><td>";
  $i++;
  echo $i;
  echo "</td</tr><tr><td>Comment:</td><td>";
  include "commentfetch.inc";
  echo "</td></td></table></br>";
  }
  }

?>      