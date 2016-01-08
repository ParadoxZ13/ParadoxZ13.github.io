<?php  include "header.inc"; 

echo "<h1>View all Outstanding Jobs By Week</h1>";

echo "<form action='jobcheck.php' method='post'>";
echo "<select name='week'>";
for ($i = 1; $i < 53; $i++) {
echo "<option value=$i>$i</option>";
}
echo "<input type='submit' value='View Jobs'/>";

echo "</br></br><a href='index.php'>Cancel</a>";


?>