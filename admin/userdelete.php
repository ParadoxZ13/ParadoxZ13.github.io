<?php include "header.php"; ?>

  <h1>Delete User</h1>
  <form action='userremove.php' method='post' onsubmit="return confirm('Are you sure you want to delete this user?')">
  Username: <input type='text' name='Username' /></br>
  <input type='submit' value='Delete User' />
  </form>
  </br></br><a href='index.php'>Cancel</a>
  </body>
  </html>