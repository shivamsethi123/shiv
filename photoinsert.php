<?php
include("connection.php");

?>
<html>
<body>

	<form action="photoinsert.php" method="POST" multiple="multiple" enctype="multipart/form-data">
		<input type="file" name="uploadfile" value="" multiple accept = ".png, .jpg, .jpeg, .gif, .tiff"/>
		<h5>Enter Description of Photo</h5><input type="text" name="caption" value=""/>
		
		<input type="submit" name="submit" value="Upload file"/>
	</form>
</body>
</html>
<?php
if($_POST['submit'])
{   $caption = $_POST["caption"];
	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder   = "photos/".$filename;
	move_uploaded_file($tempname,$folder);
	
	if($folder!="")
	{
		$query = "INSERT INTO PHOTOS (pics, caption) VALUES ('$folder', '$caption')";
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