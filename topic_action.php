<?php
require('entre_class.php');

$entrepreneur = new entrepreneur;

if(isset($_SESSION['topic'])){
	header('location:mainsite.php');
$entrepreneur->get_topic3();
}

?>