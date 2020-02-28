<?php
include("connection.php");
$id = $_GET['id'];
$query = "DELETE FROM NE WHERE id = '$id'";
$data = mysqli_query($conn, $query);
if($data)
{
	echo "<script>alert('Record Deleted')</script>";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0;URL=http://localhost/news/adminmainpage.php">
	<?php
}
else
{
	echo "<font color='red'>Sorry, Record is not deleted";
}
?> 