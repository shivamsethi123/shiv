<?php
include("connection.php");
error_reporting(0);
?>
<html>
<body>

	<form action="videoupload.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="uploadfile" value="" multiple accept=".mp4, .3gp, .mkv, .mov, .wmv, .flv"/>
		
		<input type="submit" name="submit" value="Upload file"/>
	</form>
</body>
</html>
<?php
if($_POST['submit'])
{
	$filename1 = $_FILES["uploadfile"]["name"];
	$tempname1 = $_FILES["uploadfile"]["tmp_name"];
	$folder   = "videos/".$filename1;
	move_uploaded_file($tempname1,$folder);
	
	if($folder!="")
	{
		$query = "INSERT INTO VIDEOSS (id, videos) VALUES ('', '$folder')";
		$data  = mysqli_query($conn, $query);
		
		if($data)
		{
			echo "";
			
		}
		?>
		<META HTTP-EQUIV="Refresh" CONTENT="0;URL=http://localhost/news/adminmainpage.php">
		
		<?php
	}
	else
	{
		echo"Ni aaya bhai";
	}
}
		?>
