<?php
require('entre_class.php');

$entrepreneur = new Entrepreneur;

$data = $entrepreneur->get_user($_SESSION['user']);


?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Likes & Shares</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="animate.css">
	<meta name="author" content="">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="viewport" content="width = device-width, initial-scale=1, shrink-to-fit=no">





	<style type="text/css">
		.likes{
			background-color:rgb(0,119,176);
			height:120px;
		}

		.sec{
			background-color:rgb(0,119,176);
			height:150px;
		}



	</style>
</head>
<body>

		<div class='container-fluid'>
		<div class='row likes'>
			<div class='col-4'>
				<h1 style='color:white; font-family:Cooper Black; font-size:35px'>Entrepreneur Forum</h1>
			</div>
			
			<div class='col-8'>
				<p style='color:white; text-align:center'>Welcome, <?php echo $data['username']; ?>: &nbsp; <i class='fas fa-user'></i> &nbsp; <a href='editprofile.php' style='color:white'>Edit Profile</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href='logout.php' style='color:white; text-decoration:none;'><b>Logout</b></a></p>

				<br>
				
				<nav class="navbar navbar-expand-lg background-color:rgb(0,119,176);">
  					<a class="navbar-brand" href="#"></a>
 					 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" style='background-color:white'>
  					  <span class="navbar-toggler-icon" ></span>
  					  </button>
  					<div class="collapse navbar-collapse" id="navbarNavDropdown">
  				  <ul class="navbar-nav">
     		 <li class="nav-item active">
      			  <a class="nav-link" href="mainsite.php" style='color:white; box-shadow:white;'>Feeds/<span class="sr-only">(current)</span></a>
      		</li>
      		
      		<li class="nav-item">
      			  <a class="nav-link" href="#post" style='color:white'>Post Topic/</a>
      		</li>
     		 <li class="nav-item">
      			  <a class="nav-link" href="fflw_topics.php" style='color:white'>Followed Topics/</a>
      		</li>
     		 <li class="nav-item">
      			  <a class="nav-link" href="posd_top.php" style='color:white'>Posted Topics/</a>
      		</li>
          <li class="nav-item">
              <a class="nav-link" href="notifs.php" style='color:white'>Notifs/</a>
          </li>
      		<li class="nav-item">
      			  <a class="nav-link" href="#" style='color:white'>Likes & shares/</a>
      		</li>
      		<li class="nav-item">
      			  <a class="nav-link" href="mainproject3.php" style='color:white'>Trending/</a>
      		</li>
          <li class="nav-item">
              <a class="nav-link" href="contactform.php" style='color:white'>Contact</a>
          </li>
		</ul>
  	   </div>
     </nav> 
   </div>
</div>



		<div class='row'>
			<div class='col' style='color:white; height:15px'>
				
			</div>
		</div>



		<div class='row sec'>
			<div class='col'>
				<h2 style='color:white; text-align:center; line-height:150px; font-family: Cooper Black'>Likes & Shares</h2>
			</div>
		</div>





</div>























	<script type='text/javascript' src='js/jquery-3.5.1.min.js'></script>
	<script type='text.javascript' src='js/bootstrap.bundle.min.js'></script>

</body>
</html>