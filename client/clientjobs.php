<?php  include "header.php"; 

echo "<h1>View all Outstanding Jobs By Client</h1>";

echo "<form action='clientwork.php' method='post'>";
include "clientselecter.php";
echo "<input type='submit' value='View Jobs'/>";

echo "</br></br><a href='index.php'>Cancel</a>";


?>