<?php
require('ajaxclass.php');

$obj = new ajax;

$stateid = $_POST['state'];
$res = $obj->get_lga($_POST['state']);


echo '<select>';
	foreach($res as $val){
		
		$f = $val['name'];
		echo "<option>$f</option>";
	}

	

echo '</select>';
?>