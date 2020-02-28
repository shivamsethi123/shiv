<?php
   include("connection.php");
   error_reporting(0);
   $query = "SELECT id, pics FROM PHOTOS";
   $data = mysqli_query($conn, $query);
   $total = mysqli_num_rows($data);
   echo $result;


if($total!= 0)
{ 



	while($result = mysqli_fetch_assoc($data))
	{
		
		echo "
		<img src='".$result['pics']."' height='150' width='150'/>
		<a href='photodelete.php?id=$result[id]' onclick=' return checkdelete()'> delete</a>";			   
	}
}
else
{
	echo "No record Found";
}

 ?>
