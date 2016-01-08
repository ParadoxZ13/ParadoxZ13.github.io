<?php include "header.php"; ?>

<h1>Add Student to Database</h1>

<form action="studentinsert.php" method="post">
Student ID <input type="text" name="ID" />*</br> 
First Name: <input type="text" name="FName" />*</br> 
Last Name: <input type="text" name="LName" />*</br> 
Student Contact: <input type="text" name="Contact" /></br>
Student Email: <input type="text" name="Email" /></br>
Student Course: <input type="text" name="Course" /></br>
<input type="submit" />
</form>
* indicates required fields

</br></br><a href='index.php'>Cancel</a>
  </body>
</html>
