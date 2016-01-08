<?php
$query2 = "SELECT * FROM tblworker WHERE WorkerID LIKE '$row[2]'";
$result2 = mysql_query($query2) or die ('Error in query: $query' . mysql_error());

($row2= mysql_fetch_array($result2));
echo $row2[1] . " " . $row2[2];
?>