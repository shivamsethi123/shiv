<?php
session_start();
if(!isset($_SESSION['user'])){
  header('location:adminlogin.php');
  exit();
}


?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Main Page</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <?php include 'links.php' ?>
  <style>

  .users .img{width:20%;
  border-radius:50%;
  float:left;
  margin-top:4%;
  margin-left:3%;
  }


  
  .users{
     float:left;
	 width:20%;
	 margin-top-2%;
  }
.logout{
   float:right;
   margin-right:3%;
   margin-top:2%;}
   
   .conatiner{
	   width:100%;
	   height:100px;
   }
  
  </style>
</head>
<body>
<div class="conatiner">	
	<div class="users">
        <a href="#"><img class="img" src="login.png"><?php $_SESSION['user']?></a>
	</div>
	<div class="logout">
	<a href="logout.php" class="btn btn-danger">Logout</a>
	</div>
</div>
	
	
		
		<div class="heading text-center text-uppercase text-white"> WELCOME <?php echo $_SESSION['user']?></div>
	</div>
	<?php include('../news/ekpage.php');?>
	



</body>
</html>
