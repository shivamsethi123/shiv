
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

	while($result = mysqli_fetch_assoc($data))
	{ 

	

	echo "<video width='100' height='100' controls>
              <source src='".$result['videos']."' type='video/mp4'/>
           </video>
           <a href='videodelete.php?id=$result[id]' onclick=' return checkdelete()'> delete</a>";		   
	
	}
}

else
{
	echo "No record Found";
}

 ?>
