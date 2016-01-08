<?php include "header.php"; ?>

<h1>Add User to Apollo Systems</h1>

<form action="userinsert.php" method="post">
*First Name: <input type="text" name="FName" /></br> 
*Last Name: <input type="text" name="LName" /></br>
Contact: <input type="text" name="Contact" /></br>
*Username: <input type="text" name="Username" /></br>
*Password: <input type="password" name="Password" /></br>
Administrator: <input type="checkbox" name="Admin" /></br>

<input type="submit" value="Add Worker"/>
</form>
* indicates required fields

</br></br><a href='index.php'>Cancel</a>
  </body>
</html>
