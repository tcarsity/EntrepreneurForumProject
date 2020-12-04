<?php
require('entre_class.php');
 
$entrepreneur = new Entrepreneur;

$entrepreneur->update_entre($_POST);
if(isset($_SESSION['user']) && isset($_POST)){
	header("location:dashboard_entre.php?success=Profile Updated Successfully");
	
}





?>