<?php

require('entre_class.php');

$entrepreneur = new entrepreneur;




?>


 



<!DOCTYPE html>
<html lang="en">
<head>
	<title>topic page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
  	<link rel="stylesheet" ttpe="text/css" href="animate.css">
	<meta name='keywords' content="">
	<meta name='author' content="Olarewaju Tosin">
	<meta name='description' content="">
	<meta charset="utf-8">
	<meta name='viewport' content='width= device-width, initial-scale=1, shrink-to-fit=no'>


	<style type="text/css">
		
		.first{
			height:130px;
			background-color:rgb(0,119,176);

		}

		.topic{
			text-align:center;
		}



	</style>










</head>
<body>

	
		<div class='container'>
			<div class='row first'>
				<div class='col'>
					<h1 style='color:white; font-family:Cooper Black; font-size:40px; text-align:center'>Entrepreneur Forum</h1>

					<a href='dashboard_entre.php' style='color:white; text-decoration:none' >Go Back</a>

				</div>
			</div>
			

			<div class='row'>
				<div class='col'>
					<h3 style='font-family:Cooper Black; font-size:40px; text-align:center; height:100px'>Follow at least 5 topics to get started.</h3>
				</div>


			</div>

			<div class='row topic'>
				<div class='col'>
					<form action='topic_action.php' method='post' class='form-vertical'>
					<?php
					$entrepreneur->get_topic3();

					?>
					<br>
					<button type='submit' class='btn btn-danger' style='width:50%' disabled>Continue</button>
					
				</form>
			</div>
		</div>


</div>



<script src="js/jquery-3.5.1.min.js"></script>


	<script type="text/javascript">
		$(document).ready(function(){
			$('.top').click(function(){
				$('.top').click(function(){
					$('.top').click(function(){
						$('.top').click(function(){
							$('.top').click(function(){
						
							$('button').removeAttr('disabled');
					});
				});
			});

		});
	});	
		
			
});
			

	</script>	


































	<script type='text/javascript' src='js/jquery-3.5.1.min.js'></script>
	<script type='text.javascript' src='js/bootstrap.bundle.min.js'></script>
</body>
</html>
