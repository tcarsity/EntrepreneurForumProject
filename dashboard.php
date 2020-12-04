<?php

require('entre_class.php');

$entrepreneur = new Entrepreneur;  
 
if(!isset($_SESSION['user'])){
	header('location:signupform.php');
	
}  



 $details = $entrepreneur->get_user($_SESSION['user']);
 
$image = "mempic/".$details['entre_pix'];

?>





<!DOCTYPE html>
<html lang='en'>
<head>
	<title>dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<meta name='keywords' content="">
	<meta name='author' content="Olarewaju Tosin">
	<meta name='description' content="">
	<meta charset="utf-8">
	<meta name="viewport" content="width= device-width, initial-scale=1, shrink-to-fit=no">



	<style type="text/css">
		.fdash{
			background-color:rgb(0,119,176);
			height:100px;
		}
		.secdash{
			background-color:rgb(0,119,176);
			height:100px;
		}
		.tdash{
			background-color:rgb(0,119,176);
			height:70px;
		}



	</style>




</head>
<body>

	<div class='container'>
		<div class='row fdash'>
			<div class='col'>
				<h2 style='color:white; font-family:Cooper Black; text-align:center'>Welcome to our Entrepreneur Forum Advice</h2>
			</div>
		</div>


		<div class='row secdash'>
			<div class='col'>
				<h3 style='color:white; font-family:Cooper Black; text-align:center'>You have Registered Successfully&nbsp;<?php echo $details['fullname'];?></h3>
			</div>
		</div>


		<div class='row tdash'>
			<div class='col'>
				<nav class="navbar navbar-expand-lg background-color:rgb(0,119,176);">
  					<a class="navbar-brand" href="#"></a>
 					 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" style='background-color:white'>
  					  <span class="navbar-toggler-icon" ></span>
  					  </button>
  					<div class="collapse navbar-collapse" id="navbarNavDropdown">
  				  <ul class="navbar-nav">
     		 <li class="nav-item active">
      			  <a class="navbar-brand" href="#" style='color:white'>Edit Profile<span class="sr-only">(current)</span></a>
      		</li>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      		 <li class="nav-item">
      			  <a class="navbar-brand" href="topicsite.php" style='color:white;'>Continue</a>
      		</li>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      		<li class="nav-item">
      			  <a class="navbar-brand" href="logout.php" style='color:white;'>Logout</a>
      		</li>

      		</ul>
      	</div>
      </nav>
	</div>
  </div>



		<div class='row'>
			<div class='col'>
				<h3><?php echo $details['fullname'];?></h3>
				<img src="<?php echo $image;?>" alt='' class='rounded-circle' style='width:20%; height:100px'>
				<form action='uploadpic.php' method='post' enctype='multipart/form-data'>
					<p>Upload Profile Picture</p>
					<input type='file' name='pic'>
					<button type='submit' class='btn btn-danger'><?php
					if($details['entre_pix']==''){
						echo 'Upload Picture';
					}
					else{
						echo 'Change Picture';
					}

					?></button>
				</form>
			</div>
			<div class='col'>
				<p>Time registered:&nbsp;<?php echo $details['reg_date'];?></p>
			</div>
		</div>
		<br>

		<div class='row'>
			<div class='col'>
				<form action='update_guest.php' method='post' class='form-vertical'>
				<div class='form-group row'>
							<label class='col-2'>Fullname</label>
							<div class='col-8'>
								<input type="text" name="fname" value="<?php echo $details['fullname'];?>" class="form-control">
							</div>
						</div>
						
						
						

						<div class='form-group row'>	
							<label class='col-2'>Gender</label>
							<div class='col-8'>
								<input type='radio' name='gender' value='Male'<?php
								if($details['gender']=='Male'){
									echo 'selected= selected';
								}?>>Male
								<input type='radio' name='gender' value='Female'<?php if($details['gender']=='Female'){
									echo 'selected = selected';
								}?>>Female
							</div>
						</div>
						
						<!-- <div class='form-group row'>	
							<label class='col-2'>Email</label>
							<div class='col-8'>
								<?php //echo $details['email'];?>
							</div>
						</div> -->

				
				
						<br>
				
				
						<div class='form-group row' align='center'>		
				<button type='submit' class='btn btn-danger' style='width:100%'>Update Profile</button>
				</div>
		
					
					</form>	
				</div>
			</div>
		


</div>




</body>
</html>