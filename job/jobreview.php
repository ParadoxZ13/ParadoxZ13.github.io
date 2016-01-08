<?php include "header.inc"; ?>

<h1>Search for Job</h1>
  
  <h2>By Name</h2>
  <form action="jobfindname.php" method="post">
  Search: <input type="text" name="search" /></br> 
  <input type="submit" value="Search"/>
  </form>
  
  <h2>By Assignee</h2>
  <form action="jobfindnameworker.php" method="post">
  Search: <input type="text" name="search" /></br> 
  <input type="submit" value="Search"/>
  </form>
  
  <h2>By ID</h2>
  <form action="jobfindnameid.php" method="post">
  Search: <input type="text" name="search" /></br> 
  <input type="submit" value="Search"/>
  </form>
  
  </br></br><a href='index.php'>Cancel</a>
  </body>
</html>
