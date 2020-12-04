<?php
require('entre_class.php');

$entrepreneur = new entrepreneur;

$data = $entrepreneur->get_entre($_SESSION['user']);




?>






<!DOCTYPE html>
<html lang='en'>
<head>
	<title>Bus topic</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
  	<link rel="stylesheet" ttpe="text/css" href="animate.css">
	<meta name="keywords" content="">
	<meta name="author" content="Olarewaju Tosin">
	<meta name="description" content="">
	<meta charset="utf-8">
	<meta name='viewport' content='width= device-width, initial-scale=1, shrink-to-fit=no'>

	<style type="text/css">
		
		.dashf{
			height:130px;
			background-color:rgb(0,119,176);
			box-sizing:border-box;
		}

		
		.second{
			background-color:rgb(0,119,176);
			height:220px;

		}
	</style>




</head>
<body>


	<div class='container-fluid'>
		<div class='row dashf'>
			<div class='col-4'>
				<h1 style='color:white; font-family:Cooper Black; font-size:35px'>Entrepreneur Forum</h1>




			</div>
			<div class='col-8'>
				<p style='color:white; text-align:center'>Welcome, <?php echo $data['username'];?>: &nbsp; <i class='fas fa-user'></i> &nbsp; <a href='editprofile.php' style='color:white'>Edit Profile</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href='mainproject.php' style='color:white; text-decoration:none;'><b>Logout</b></a></p>

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
      			  <a class="nav-link" href="post_topic.php" style='color:white'>Post Topic/</a>
      		</li>
     		 <li class="nav-item">
      			  <a class="nav-link" href="#" style='color:white'>Followed Topics/</a>
      		</li>
     		 <li class="nav-item">
      			  <a class="nav-link" href="#" style='color:white'>Posted Topics/</a>
      		</li>
          <li class="nav-item">
              <a class="nav-link" href="#" style='color:white'>Notifs/</a>
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


			
			<div class='row second'>
				
					<div class='col-8'>
  						<h1  style='color:white; font-family:Cooper Black; font-size:50px'>Welcome to the Forum</h1>
  						<p style='color:white; font-family:Cooper Black'>Share your knowledge and help solve problems in the Entrepreneur World!</p>
  						<br>
  						<br>
  						<form action='' method='post' class='form-inline'>
             			 <input type='text' name='sert' style='width:60%;' class='form-control' placeholder='Search Topics'>
             				 &nbsp;<button type='button' class='btn btn-danger' style='font-family:Aharoni; font-size:17px'><i class ='fas fa-search'></i></button>
           				</form>
  					</div>
  					<div class='col-4' id='stats'>
           
            		 <p style='color:white'><b>Topics:</b></p>
            		 <p style='color:white'><b>Members:</b></p> 
            		 <p style='color:white'><b>Date:</b></p>

  					        
  					</div>


				</div>


				<div class='row'>
					<div class='col'>
						<h2 style='font-family:Cooper Black; text-align:center'>Business Talk - Entrepreneur Forum</h2>
						<br>
						<P style='text-align: center'><b>
						<a href = '#'>Entrepreneur Forum</a> / <a href = '#'>General Business discussion</a> / <a href = '#'>Business Talk</a>
						</b></P>

					</div>



				</div>
				<div class='row'>
					<div class='col'>
						<div class='card'>
							<div class='card-body'>
								<p class='card-text'></p>

							</div>
						</div>
					</div>
				</div>















</div>















</body>
</html>