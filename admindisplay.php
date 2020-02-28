<style>
td{padding:10px;}
</style>
<?php
   include("connection.php");
   error_reporting(0);
   $query = "SELECT * FROM NE";
   $data = mysqli_query($conn, $query);
   $total = mysqli_num_rows($data);
   echo $result;


if($total!= 0)
{ 
?>
  <table>
  <tr>
  <th>News</th>
  <th colspan="2">Operations</th>
  </tr>
  <?php

	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
             
                   <td>".$result['news']."</td>
				   
				   <td><a href='delete.php?id=$result[id]' onclick=' return checkdelete()'>  delete</a></td>
             </tr>";
		
	}
}

else
{
	echo "No record Found";
}

?>
</table>
<script>
function checkdelete()
{
  return	confirm('Are you sure you want to delete this data ???');
}
</script>