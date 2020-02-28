<?php
include("connection.php");
error_reporting(0);

?> 


<html>
<head>
</head>
<body>


<form action="" method="post" enctype="multipart/form-data">

+News<input type="text" name="studentname" value=""/>

<input type="submit" name="submit" value="submit"/>


</form> 
<?php 
if($_POST['submit'])
{
$id = $_GET['id'];
$sn = $_POST['studentname'];

if($sn!="")
{
$query = "INSERT INTO NE (news) VALUES ('$sn')";
$data = mysqli_query($conn, $query);

if($data)
{
	echo "Data inserted into Database";
}
?>
<?php
}
else
{
	echo "All fields are required";
}
}
?>
</body>
</html> 