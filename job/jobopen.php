<?php include "header.inc";?> 

  <h1>Reopen Closed Job</h1>
  
<?php
$con = mysql_connect("localhost", "root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  
mysql_select_db("jobs", $con) or die('derp'); 
  
     
$query1 = "SELECT * FROM tbljob WHERE JobStatus = 'Closed'";         

$result1 = mysql_query($query1) or die('Error' .mysql_error());



if (mysql_num_rows($result1) <1) {
    echo "All jobs are open";
  } else {
    echo "Select Closed Job:";
    echo "<form action='jobrestore.php' method='post'>";
    echo "<select name='job'>"; 
while ($row1 = mysql_fetch_row($result1)){
    echo "<option value=" . $row1[0] . ">" . $row1[1] . "</option>";   
  }
  echo "<input type='submit' valuef='Reopen Job'/>";
}
?>


</br></br><a href='index.php'>Cancel</a>
    </body>
</html>