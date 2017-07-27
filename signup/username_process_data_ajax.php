<?php
	require_once("../classes/ini.php");


	$username= $db->escape_string($_POST['data_key']);

	$sql="SELECT * FROM users WHERE user_name='$username'";
	$results= $db->query($sql);

	if ($row= $results->fetch_object()) {
		echo "USER NAME HAS BEEN TAKEN";
	}






?>