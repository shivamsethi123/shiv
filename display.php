<style>
td{padding:10px;}

.news{
  border:1px solid grey;
  height:280px;
  width:22%;
  color:grey;
  padding : 10px;
  text-align:center;
}
marquee{
	height:150px;
}
</style>
<?php
   include("connection.php");
   error_reporting(0);
   $query = "SELECT * FROM ne";
   $data = mysqli_query($conn, $query);
   $total = mysqli_num_rows($data);
   echo $result;



if($total!= 0)
{ 
?>
<div class="news">
<h2>News & Events</h2>
<marquee direction="up" scrollamount="2">

<?php
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<ul>
                   <li><h3>".$result['news']."</h3></li>
           
             </ul>";
		
	}
}

else
{
	echo "No News Found";
}

?>
</marquee>
</div>