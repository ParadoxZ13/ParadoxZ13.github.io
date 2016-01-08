<?php include "header.php"; ?>

  <h1>Remove Client</h1>
  <form action='clientremove.php' method='post' onsubmit="return confirm('Are you sure you want to delete this client?')">
  Username: <?php include "clientselecter.php";?></br>
  <input type='submit' value='Delete Client' />
  </form>
  </br></br><a href='index.php'>Cancel</a>
  </body>
  </html>