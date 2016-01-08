Add New Comment 

<form action='jobcomment.inc' method='post'>
</br><textarea name='comment' col='40' row='60'></textarea></br>
<?php include "jobselecter.inc" ?>
<input type='submit' value='View Comments'/>
</form>

<?php if (isset($_POST['comment'])) {
$user = $_SESSION['user'];
$query1 = "SELECT * FROM tblworker WHERE WorkerUsername = '$user'";
$result1 = mysql_query($query1) or die ('Error in query: $query' . mysql_error());
$row1 = mysql_fetch_row($result1);

$comment = $_POST['comment'];
$user = $row1[1];
$job = $_POST['job'];

$comment = $_POST["comment"];
$query2 = "INSERT INTO tblcomment (CommID, CommContent, WorkerID, JobID) VALUES(NULL, '$comment',  '$user',  '$job')";
$result2 = mysql_query($query2) or die ('Error in query: $query' . mysql_error());

echo "Comment sucessfully added";
}