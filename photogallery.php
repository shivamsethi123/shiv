
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta charset="utf-8">
<link rel="stylesheet" href="css/lightbox.min.css">
<link rel="stylesheet" href="css/gallery.css">
<script src="js/lightbox-plus-jquery.min.js"></script>
</head>
<body>

<?php
   include("connection.php");
   error_reporting(0);
   $id = $_GET['id'];
   $query = "SELECT pics,caption FROM PHOTOS";
   $data = mysqli_query($conn, $query);
   $total = mysqli_num_rows($data);
   echo $result;

   

if($total!= 0)
{ 

	while($result = mysqli_fetch_assoc($data))
	{ 

	

	echo "<div class='gap'>
	<table>
	<div class='gallery'>
<a href='".$result['pics']."' data-lightbox='mygallery' ><img src='".$result['pics']."'></a>
<div class='desc'>".$result['caption']."</div>
</table>
</div>";	   
	}
}

else
{
	echo "No record Found";
}

 ?>


</body>
</html>
