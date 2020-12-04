<?php
if(!empty($_POST)){





require('entre_class.php');
$entrepreneur = new Entrepreneur;

 $entrepreneur->login_user($_SESSION['user']);

   

 
}
?>   
  


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Main Project</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
  <link rel="stylesheet" ttpe="text/css" href="animate.css">
	<meta name="keywords" content="">
	<meta name="author" content="Olarewaju Tosin">
	<meta name="description" content="">
	<meta charset="utf-8">
	<meta name='viewport' content='width= device-width, initial-scale=1, shrink-to-fit=no'>

	<style type="text/css">
		
		.header{
			background-color:rgb(0,119,176);
			height:130px;

		}
		.second{
			background-color:rgb(0,119,176);
			height:220px;

		}

		.footer{
			
			height:200px;
			
		}
    .link{
      text-align:center;
      text-decoration:none
    }


	</style>





</head>
<body>

	<div class='container-fluid'>
		<div class='row header'>
			<div class='col-5'>
				<h1 style='color:white; font-family:Cooper Black; font-size:40px'>Entrepreneur Forum</h1>
			</div>
			<div class='col-7'>
				<nav class="navbar navbar-expand-lg background-color:rgb(0,119,176);">
  					<a class="navbar-brand" href="#"></a>
 					 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" style='background-color:white'>
  					  <span class="navbar-toggler-icon" ></span>
  					  </button>
  					<div class="collapse navbar-collapse" id="navbarNavDropdown">
  				  <ul class="navbar-nav">
     		 <li class="nav-item active">
      			  <a class="nav-link" href="#" style='color:white'>Forums<span class="sr-only">(current)</span></a>
      		</li>
      		<li class="nav-item">
      			  <a class="nav-link" href="#About" style='color:white'>About</a>
      		</li>
     		 <li class="nav-item">
      			  <a class="nav-link" href="mainprojwebpage2.php" style='color:white'>Features</a>
      		</li>
     		<!--  <li class="nav-item">
      			  <a class="nav-link" href="mainproject3.html" style='color:white'>Trending</a>
      		</li>
      		<li class="nav-item">
      			  <a class="nav-link" href="#" style='color:white'>Members</a>
      		</li>
          <li class="nav-item">
              <a class="nav-link" href="contactform.html" style='color:white'>Contact</a>
          </li> -->
      		<li>&nbsp;&nbsp;&nbsp;&nbsp;
      			<button type="button" class="btn btn-info"><a href='signupform.php' style='color:white; text-decoration:none' >SIGN UP</a></button>
      		</li>
         <!--  <li>
                &nbsp;&nbsp;&nbsp;&nbsp;  
            <button type="button" class="btn btn-info">LOG IN</button>
          </li> -->

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
             			 <input type='text' name='sert' style='width:60%;' class='form-control' placeholder='Search'>
             				 &nbsp;<button type='button' class='btn btn-danger' style='font-family:Aharoni; font-size:17px'><i class ='fas fa-search'></i></button>
           				</form>
  					</div>
  					<div class='col-4' id='stats'>
           
             <p style='color:white'><b>Topics:</b></p>
             <p style='color:white'><b>Members:</b></p> 
             <p style='color:white'><b>Date:</b></p>

  					 
  					</div>
  				</div>
  					<br>


  					<div class='row'>
  						<div class='col-9'>
  							<div class='card'>
  								<h6 class='card-header text-white' style='background-color:rgb(0,119,176)'>Forum Rules</h6>
  								<div class='card-body'>
  									<!--<p class='card-title'>Rules</p>-->
  								<p class='card-text'>No Spam/Advertising/Self-promote in the forums.</p>
  								<p class='card-text'>Do not post copyright-infringing material.</p>
  								<p class='card-text'>Do not post "offensive" posts, links or images.</p>
  								<p class='card-text'>Do not cross post questions.</p>
  								<p class='card-text'>Do not PM users asking for help.</p>
  								<p class='card-text'>No discussion of any illegal activity.</p>
  								<p class='card-text'>Remain respectful of other members at all times.</p>

  								</div>		
  							</div>
  						</div>
  						<div class='col-3'>
  							<div class='card'>
  								<div class='card-body'>
  									<form action='entre_action.php' method='post' class='form-vertical'>
                      <div id='memo'></div>
  										<label>Username</label>
  										<input type='text' name='username' class='form-control'>
  										<label>Password</label>
  										<input type='password' name='password' class='form-control'>
  										<br>
  										<input type='checkbox' name='remember'>&nbsp;Remember Me 
  										&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<button type='submit' class='btn btn-danger' id='bot'>Log in</button>
                      <hr style='color:black'>
                      <a href = '#' style='text-decoration:none;'>Forgot Password?</a>
  									</form>
  								</div>
  							</div>
  						</div>
					</div>	
  						<br>
  							<div class='row'>
  								<div class='col-9'>
  									<h5>Forum Categories</h5>
  								</div>
  							</div>
  							
  						<div class='row'>
              <div class='col-7'>
                <div class='card'>
                  <h6 class='card-header text-white' style='background-color:rgb(0,119,176)'>Entrepreneur</h6>
                  <div class='card-body'>
                    <p class='card-title'>Topics</p>
                    <a href='#' class='card-link'>Investment</a>
                    &nbsp;&nbsp;&nbsp;<a href='#' class='card-link'>Business Talk</a>
                    &nbsp;&nbsp;&nbsp;<a href='#' class='card-link'>Marketing</a>
                    &nbsp;&nbsp;&nbsp;<a href='#' class='card-link'>Economy</a>
                    &nbsp;&nbsp;&nbsp;<a href='#' class='card-link'>Global Business</a>
                    &nbsp;&nbsp;&nbsp;<a href='#' class='card-link'>Career Talk</a>
                    <a href='#' class='card-link'>Social Media for Business</a>

                  </div>
                </div>
              </div>
            
  					
  							
  							
  								<div class='col-5'>
  									<div class='card'>
  										<h6 class='card-header text-white' style='background-color:rgb(0,119,176)'>Recent News</h6>
  										<div class='card-body'>
  											<p class='card-text'><a href='#' class='card-link'>Starting a business with low capital</a></p>
                        <p class='card-text'><a href='#' class='card-link'>Check out World class entrepreneurs in the 30 under 30 forbes summit</a></p>
  										</div>
  									</div>
  								</div>
  						</div>

  						<br>
  					
  					<br>
            
           
          

  						 <div class='row footer'>
  							<div class='col'>
  								<h2 style='text-align:center; font-family:Cooper Black' id='About'>About Us</h2>
                  <p style='text-align:center;'>Entrepreneur Advice Forum is very active, where members can get<br> advice and support for their small business or website. <br>The majority of our discussions relate to online business and helping young<br> entrepreneurs out there to grow and also to help others who wants to be an <br>entrepreneur in the business world.</p>

  							</div>
                 </div>
                 <br>


              <div class='container'>
                <div class='row link'>
                  <div class='col'>
                    <a href='#' style='color:black; text-decoration:none'>Forums</a>
                      <hr style='color:black'>
                    <a href='#About' style='color:black; text-decoration:none'>About</a>
                      <hr style='color:black'>
                    <a href='mainprojwebpage2.html' style='color:black; text-decoration:none'>Features</a>
                      <hr style='color:black'>
                    <a href='mainproject3.html' style='color:black; text-decoration:none'>Trending</a>
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

	
<script src="js/jquery-3.5.1.min.js"></script>

<script type="text/javascript">
  
  $(document).ready(function(){
    $('#bot').click(function(){

    })
  })




</script>





























	<script type='text/javascript' src='js/jquery-3.5.1.min.js'></script>
	<script type='text.javascript' src='js/bootstrap.bundle.min.js'></script>

</body>
</html>