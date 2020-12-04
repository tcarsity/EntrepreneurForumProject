<?php
require('entre_class.php');
   
$entrepreneur = new Entrepreneur; 

$entrepreneur->upload_prof($_FILES['pic']);



if(isset($_SESSION['user'])){
	header('location:dashboard.php');
}


	

?> 