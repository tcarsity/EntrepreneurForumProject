<?php
require('entre_class.php');

$entrepreneur = new entrepreneur;

$data = $entrepreneur->get_user($_SESSION['user']);

$image = "mempic/".$data['entre_pix'];
?>



 




<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="animate.css">
	<meta name="author" content="">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="viewport" content="width = device-width, initial-scale=1, shrink-to-fit=no">

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

	.link{
      text-align:center;
      text-decoration:none;
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
				<p style='color:white; text-align:center'>Welcome, <?php echo $data['username'];?>: &nbsp; <i class='fas fa-user'></i> &nbsp; <a href='#' style='color:white'>Edit Profile</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href='logout.php' style='color:white; text-decoration:none;'><b>Logout</b></a></p>
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
      			  <a class="nav-link" href="mainsite.php" style='color:white'>Post Topic/</a>
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
			<div class='row' style='height:10px'>
				<div class='col'>
					
				</div>
				
			</div>

			<div class='row' align='center'>
				<div class='col' style='height:100px; background-color:rgb(0,119,176);'>
					<h3 style='color:white; font-family:Cooper Black'>My Profile</h3>

					<a href='#' style='color:white; text-align:center'>My Profile/</a>&nbsp; &nbsp;
					<a href='editprofile.php' style='color:white; text-align:center'>Edit My Profile</a>

				</div>
				
			</div>

		<br>

	<div class='container'>
		
		<div class='row'>
			<div class='col'>
				<h2><?php echo $data['fullname']?></h2>
				<img src = "<?php echo $image;?>" alt='' class='rounded-circle'  style='width:20%; height:100px'>
			</div>
			
			<div class='col'>
				
				<a href='following.php' style='color:rgb(0,119,176);'>Following</a>
				<br>
				<br><hr style='color:black'>
				<br>
				<a href='followers.php' style='color:rgb(0,119,176);'>Followers</a>

			</div>

			<div class='col'>
				<p>Time registered:<?php echo $data['reg_date'];?></p>
				<p>Time spent online:</p>
				<p>Last seen:</p>

			</div>

		</div>
<hr style='color:black'>

		<div class='row' align='center'>
			<div class='col'>
				<a href='#' style='color:rgb(0,119,176);'>Topics I've Posted</a>
			</div>
			<div class='col'>
				<a href='#' style='color:rgb(0,119,176);'>Posts I've Liked</a>
			</div>
			<div class='col'>
				<a href='#' style='color:rgb(0,119,176);'>Posts I've Shared</a>
			</div>
			<div class='col'>
				<a href='#' style='color:rgb(0,119,176);'>Messages</a>
			</div>


		</div>
	<hr style='color:black'>
			

		





	</div>
	<br>
  <br>
	<div class='row footer'>
  							<div class='col'>
  								<h2 style='text-align:center; font-family:Cooper Black' id='Aboutus'>About Us</h2>
                  <p style='text-align:center;'>Entrepreneur Advice Forum is very active, where members can get<br> advice and support for their small business or website. <br>The majority of our discussions relate to online business and helping young<br> entrepreneurs out there to grow and also to help others who wants to be an <br>entrepreneur in the business world.</p>

  							</div>
              </div>
              <br>

              <div class='container'>
                <div class='row link'>
                  <div class='col'>
                    <a href='mainproject.html' style='color:black; text-decoration:none'>Forums</a>
                      <hr style='color:black'>
                    <a href='#Aboutus' style='color:black; text-decoration:none'>About</a>
                      <hr style='color:black'>
                    <a href='mainprojwebpage2.html' style='color:black; text-decoration:none'>Features</a>
                      <hr style='color:black'>
                    <a href='mainproject3.html' style='color:black; text-decoration:none'>Trending</a>
                      <hr style='color:black'>
                    <a href='#' style='color:black; text-decoration:none'>Members</a>
                     <hr style='color:black'>
                    <a href='contactform.html' style='color:black; text-decoration:none'>Contact</a>
                      <hr style='color:black'>
                  </div>
  						</div>
            </div>

  					            <br>
                        <br>

            			 <div class='container'>
                    <div class='row'>
                      <div class='col'>
                        <p class='fas fa-copyright'>&nbsp;Copyright 2020</p>
                       </div>
                       <div class='col' align='center'>
                         <p>Terms and Rules</p>
                         <p>Privacy and Policy</p>
                         <p>Help</p>
                         <p>Contact Us</p>
                       </div>
                      <div class='col' align='right'>
                      	 <h5>Follow us on</h5>
                        <i class='fab fa-facebook-square fa-2x'></i>
                         <i class='fab fa-twitter-square fa-2x'></i>
                          <i class='fab fa-instagram-square fa-2x'></i>
                           <i class='fab fa-linkedin fa-2x'></i>
                      </div>
                    </div>
                  </div>














</div>







</body>
</html>