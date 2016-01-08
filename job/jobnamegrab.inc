<?php
$query1 = "SELECT * FROM tbljob WHERE JobID LIKE '$row[3]'";
$result1 = mysql_query($query1) or die ('Error in query: $query' . mysql_error());

($row1 = mysql_fetch_array($result1));
echo $row1[1];
?>