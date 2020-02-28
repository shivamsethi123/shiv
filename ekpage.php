<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/ekpage.css">
</head>
<body>

	<div class="tab">
			  <button class="tablinks" onclick="openCity(event, 'News')" id="defaultOpen">+NEWS</button>
			  <button class="tablinks" onclick="openCity(event, 'Photos')">+PHOTOS</button>
			  <button class="tablinks" onclick="openCity(event, 'Videos')">+VIDEOS</button>
			  <button class="tablinks" onclick="openCity(event, 'Activities')">ACTIVITIES</button>
			  <button class="tablinks" onclick="openCity(event, 'SmartSystem')">SMART INFORMATIVE SYSTEM</button>
	</div>

	<div id="News" class="tabcontent">
				  <h3><center>NEWS SECTION</center></h3>`

		    <?php
			   include("insert.php");
			   error_reporting(0);
		    ?>
		     <br>
			<?php
				include("admindisplay.php");
				error_reporting(0);
			?>
	</div>

	<div id="Photos" class="tabcontent">
			<h3><center>Add Photos</center></h3>
			<?php include('photoinsert.php');?>
			<?php include('adminphotodisplay.php');?>
	</div>

		<div id="Videos" class="tabcontent">
				<h3><center>Add Videos</center></h3>
			    <br>
		    <?php
			   include("videoupload.php");
			   error_reporting(0);
		   ?>
		   <?php
			    include("videodisplayadmin.php");
				error_reporting(0);
		   ?>

		</div>
		<div id="Activities" class="tabcontent">
				<h3><center>ACTIVITIES</center></h3> 
				<?php include('activities/show.php');?>
		</div>
		
		
		<div id="SmartSystem" class="tabcontent">
			    <h3><center>Smart Information System</center></h3>
		</div>


</body>
</html>









<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
</body>
</html> 
