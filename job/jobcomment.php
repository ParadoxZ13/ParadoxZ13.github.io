<?php include "header.inc";
echo "Select job:"; 
echo "<form action='jobcomment.php' method='post'>";
include "jobselecter.inc";
echo "<input type='submit' value='View Comments'/>";
echo "</form>";
if (isset($_POST['job'])) {
include "commentprint.inc";
include "commentpost.inc";
}

echo "</br></br><a href='index.php'>Return</a>";
echo "</div>";