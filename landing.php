<?php 

  include "header.inc";
  
  echo "<h1>Welcome to Apollo</h1>";
  echo "Available functions:</br></br>";
  echo "<a href='job/index.php'>Job Logging System</a></br>";
  echo "<a href='client/index.php'>Client Detail System</a></br>";
  echo "<a href='laptop/index.php'>Laptop Booking System</a></br>";
  if ($_SESSION['admin'] == 1){ 
    echo "<a href='admin/index.php'>Administrative Functions</a></br>";
  } else {
  echo "<a href='admin/useredit.php'>Password Change</a></br>";
  }
  echo "<a href='logout.php'>Logout</a>";

  ?>
  </div>
  </body>
  </html>
  