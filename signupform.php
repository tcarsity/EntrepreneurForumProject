<?php
require('entre_class.php');

$entrepreneur = new Entrepreneur;


?>   

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign up form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<meta name='keywords' content="">
	<meta name='author' content="Olarewaju Tosin">
	<meta name='description' content="">
	<meta charset="utf-8">
	<meta name='viewport' content='width= device-width, initial-scale=1, shrink-to-fit=no'>

	<style type="text/css">
		
		.header{
			background-color:rgb(0,119,176);
			height:130px;

		}

		.tohide{
			display:none;
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
				<br>

					<form action='' method='post' class='form-inline'>
             			 <input type='text' name='sert' style='width:40%;' class='form-control' placeholder='Search'>
             				 &nbsp;<button type='button' class='btn btn-danger' style='font-family:Aharoni; font-size:17px'><i class ='fas fa-search'></i></button>
           		</form>

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
      			  <a class="nav-link" href="mainproject.php" style='color:white'>Forums<span class="sr-only">(current)</span></a>
      		</li>
      		<li class="nav-item">
      			  <a class="nav-link" href="#About" style='color:white'>About</a>
      		</li>
     		 <li class="nav-item">
      			  <a class="nav-link" href="mainprojwebpage2.php" style='color:white'>Features</a>
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


<br>
				<div class='container'>
					<h1 style='font-family:Cooper Black'>Sign Up Here</h1>
					<br>
			<div class='shadow-lg p-3 mb-5 bg-white rounded'>
			<div class='card'>
				<div class='card-body'>
				<form action='signup_action.php' method='post' class='form-vertical'>
				  <input type='radio' name='usertype' value='one'>&nbsp;ENTREPRENEUR
					&nbsp; &nbsp; &nbsp; &nbsp;
				  <input type='radio' name='usertype' value='two'>&nbsp;GUEST
					
						<br>
						<br>

						<div class='form-group row'>
							<div class='col-2'>
							<label>Fullname</label>
							</div>
							<div class='col-8'>
								<input type='text' name='fname' class='form-control' required>
							</div>
						</div>
						
						<div class='form-group row'>
							<div class='col-2'>	
							<label>Username</label>
							</div>
							<div class='col-8'>
								<input type='text' name='user' class='form-control' required>
							</div>
						</div>
						<div class='form-group row'>
							<div class='col-2'>	
							<label>Password</label>
							</div>
							<div class='col-8'>
								<input type='password' name='pwd' class='form-control' required id='pas1'>
							</div>
						</div>

						<div class='form-group row'>
							<div class='col-2'>
							<label>Confirm Password</label>
							</div>	
							<div class='col-8'>
								<input type='password' name='pwdd' class='form-control' required id='pas2'>
							</div>
						</div>


						<div class='form-group row'>
							<div class='col-2'>
							<label>Gender</label>
							</div>	
							<div class='col-8'>
								<input type='radio' name='gender' value='Male'>Male
								<input type='radio' name='gender' value='Female'>Female
							</div>
						</div>
						
						<div class='form-group row'>
							<div class='col-2'>	
							<label>Email</label>
							</div>
							<div class='col-8'>
								<input type='text' name='email' class='form-control' required>
							</div>
						</div>

				
				
						<br>
				

						
						
				<div class='form-group row' align='center'>		
				<button type='submit' class='btn btn-danger' style='width:100%'>Register</button>
				</div>
		
					
					</form>	
				</div>
			</div>
		</div>						<br>
								<br>

			<div class='row footer'>
  							<div class='col'>
  								<h2 style='text-align:center; font-family:Cooper Black' id='About'>About Us</h2>
                  <p style='text-align:center;'>Entrepreneur Advice Forum is very active, where members can get<br> advice and support for their small business or website. <br>The majority of our discussions relate to online business and helping young<br> entrepreneurs out there to grow and also to help others who wants to be an <br>entrepreneur in the business world.</p>

  				</div>
             </div>
                 <br>

         </div>
              <div class='container'>
                <div class='row link'>
                  <div class='col'>
                    <a href='mainproject.html' style='color:black; text-decoration:none'>Forums</a>
                      <hr style='color:black'>
                    <a href='#About' style='color:black; text-decoration:none'>About</a>
                      <hr style='color:black'>
                    <a href='mainprojwebpage2.html' style='color:black; text-decoration:none'>Features</a>
                      <hr style='color:black'>
                    <a href='mainproject3.html' style='color:black; text-decoration:none'>Trending</a>
                      <hr style='color:black'>
                    
                    <a href='contactform.php' style='color:black; text-decoration:none'>Contact</a>
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
		





	</script>


























	<script type='text/javascript' src='js/jquery-3.5.1.min.js'></script>
	<script type='text.javascript' src='js/bootstrap.bundle.min.js'></script>
</body>
</html>