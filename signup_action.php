<?php

require('entre_class.php');

$entrepreneur = new entrepreneur;




if($_POST['usertype']=='one'){
	$entrepreneur->signup($_POST);

}
if($_POST['usertype']=='two'){
	$entrepreneur->member($_POST);
}



?>