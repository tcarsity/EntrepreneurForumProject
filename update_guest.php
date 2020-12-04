<?php

require('entre_class.php');

$entrepreneur = new Entrepreneur;
$entrepreneur->update_guests($_POST);

if(isset($_SESSION['user']) && isset($_POST)){
	header('location:dashboard.php?success=Profile Updated Successfully');

}






?> 