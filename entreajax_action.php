<?php
require('entre_class.php');

$entrepreneur = new entrepreneur;


$get = $_POST['top'];
$put = $_SESSION['user'];
$topicid = $_POST['topics'];



$entrepreneur->insert_post($get,$put,$topicid);


 


  


?> 