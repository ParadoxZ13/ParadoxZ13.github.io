<?php include "header.php";

echo "<h1>Edit Current User Password</h1>";
   
    echo "<form action='userpass.php' method='post'>";
    if ($_SESSION['admin'] == 1){ 
        echo "Username: <input type='text' name='Username' /></br>";
        }
    echo "Password: <input type='password' name='Password' /></br>";
    echo "<input type='submit' value='Change Password'/>";
 
 ?>
 
 </br></br><a href='index.php'>Cancel</a>
  </body>
</html>
