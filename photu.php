<?php
   include("connection.php");
   error_reporting(0);
   $id = $_GET['id'];
   $query = "SELECT pics FROM PHOTOS";
   $data = mysqli_query($conn, $query);
   $total = mysqli_num_rows($data);
   echo $result;

   

if($total!= 0)
{ 

	while($result = mysqli_fetch_assoc($data))
	{ 
              
			   
		
		echo "<img src='".$result['pics']."' height='500' width='400'/>";
			   
	}
}

else
{
	echo "No record Found";
}

 ?>
