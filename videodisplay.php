<html>
<head>
<link rel="stylesheet" href="css/gallery.css">
</head>
</html>
<?php
   include("connection.php");
   error_reporting(0);
   $id = $_GET['id'];
   $query = "SELECT id, videos FROM videoss";
   $data = mysqli_query($conn, $query);
   $total = mysqli_num_rows($data);
   echo $result;

   

if($total!= 0)
{ 
echo"<center><h1>Video Gallery</h1></center>";
	while($result = mysqli_fetch_assoc($data))
	{ 

	

	echo "<div class='gap'>
				<table>	
				<div class='gallery'>
	<video width='250' height='250' controls>
              <source src='".$result['videos']."' type='video/mp4'/>
           </video>
		   </table>
           </div>
		   </div>";		   
	
	}
}

else
{
	echo "No record Found";
}

 ?>
