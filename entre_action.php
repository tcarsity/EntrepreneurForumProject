<?php 
 if(!empty($_POST)){
 	print_r ($_POST);

 

require('entre_class.php');
$entrepreneur = new Entrepreneur;

$username = $_POST['username'];
$password = $_POST['password'];



if(isset($_SESSION['user'])){
	header('location:mainsite.php');
}


$entrepreneur->login_user($username, $password);








 

 
}

?>