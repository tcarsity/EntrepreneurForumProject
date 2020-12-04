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

				</div>
			</div>
			

			<div class='row'>
				<div class='col'>
					<h3 style='font-family:Cooper Black; font-size:40px; text-align:center; height:100px'>Follow at least 5 topics to get started.</h3>
				</div>


			</div>

			<div class='row topic'>
				<div class='col'>
					<form action='' method='' class='form-vertical'>
					<span>Business Talk</span>&nbsp;&nbsp; <input type='checkbox' name='bustalk' class='top'>
					<br>
					<br>
					<br>
					<span>Career Talk</span>&nbsp;&nbsp; <input type='checkbox' name='careertalk' class='top'>
					<br>
					<br>
					<br>
					<span>Global Business</span> &nbsp;&nbsp;<input type='checkbox' name='globus' class='top'>
					<br>
					<br>
					<br>
					<span>Entrepreneurial Mindset</span>&nbsp;&nbsp; <input type='checkbox' name='entremind' class='top'>
					<br>
					<br>
					<br>
					<span>Marketing & content</span> &nbsp;&nbsp;<input type='checkbox' name='mktgcont' class='top'>
					<br>
					<br>
					<br>
					<span>Marketing</span>&nbsp;&nbsp; <input type='checkbox' name='mktg' class='top'>
					<br>
					<br>
					<br>
					<span>Economy</span> &nbsp;&nbsp;<input type='checkbox' name='economy' class='top'>
					<br>
					<br>
					<br>
					<span>Investment</span>&nbsp;&nbsp; <input type='checkbox' name='invest' class='top'>
					<br>
					<br>
					<br>
					<span>Business Growth</span>&nbsp;&nbsp; <input type='checkbox' name='busgrowth' class='top'>
					<br>
					<br>
					<br>
					<button type='submit' class='btn btn-danger' style='width:50%' disabled><a href='mainsitepage.html' style='color:white'>Continue</a></button>
					
				</form>
			</div>
		</div>


</div>



<script src="js/jquery-3.5.1.min.js"></script>


	<script type="text/javascript">
		$(document).ready(function(){
		var a =	$('.top').click(function(){
			for(a = 1; a <= 5; a++){
				$('button').removeAttr('disabled');

					}
				

		})

		 

	});

	</script>	


































	<script type='text/javascript' src='js/jquery-3.5.1.min.js'></script>
	<script type='text.javascript' src='js/bootstrap.bundle.min.js'></script>
</body>
</html>
