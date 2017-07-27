<?php
	require_once("../classes/ini.php");

	session_start();
	session_destroy();

// REQUIRES THE $db Database class to be used
	$db->redirect('../index.php');



?>