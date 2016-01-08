<?php include "header.inc"; ?>

  <h1>Add Job</h1>
  
<form action='jobinsert.php' method='post'>
Job Title: <input type="text" name="title" />*</br> 
Job Description: </br><textarea name="description" col="40" row="60"></textarea>*</br> 
Computer Password(if applicable): <input type="text" name="password" /></br>
Category: <input type="text" name="category"> </br>
Job Priority: <select name="priority">
<option value="High">High</option>
<option value="Medium">Medium</option>
<option value="Low">Low</option>
</select> </br>
Due Date:
<?php echo "<select name='date'>";
for ($i = 1; $i < 32; $i++) {
echo "<option value=$i>$i</option>";
}
echo "</select>";

echo "<select name='month'>"; 
for ($i = 1; $i < 13; $i++) {
echo "<option value=$i>$i</option>";
}
echo "</select>";

echo "<select name='year'>";
for ($i = 2011; $i < 2111; $i++) {
echo "<option value=$i>$i</option>";
}

echo "</select>";

echo "</br>Due Week:";

echo "<select name='week'>";
for ($i = 1; $i < 53; $i++) {
echo "<option value=$i>$i</option>";
}

echo "</select>";

echo "</br>";

echo "Assigned Client:";

include "clientselecter.inc"


?>
<input type="submit" value="Insert Job"/>
</form>

* indicates required fields

</br></br><a href='index.php'>Cancel</a>
  </body>
</html>
