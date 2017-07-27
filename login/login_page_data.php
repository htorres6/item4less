<?php
	require_once("../classes/ini.php");

	$user= new User();

//OBJECT  //OBJECT PROPERTIES     // VALUES
	$user->user_name= $db->escape_string($_POST['username']);
	$user->password= md5($db->escape_string($_POST['psw']), $user->user_name);

	$validated_user= $user->get_user($user->user_name, $user->password);

	if (!$validated_user) {
		Session::set_message("<h2 style='color: red;'>INVALID CREDENTIALS</h2>");
		$db->redirect("login_page.php");
	} else {					    // OBJECT NOTATION
		$_SESSION['user_id']= $validated_user->id;
		Session::set_message("<h2 style='color: green;' class='text-center'><b>wELcomE bAcK " . $user->user_name ."</b></h2>");
	

	// REDIRECT IT BACK TO user/profile.php
	$db->redirect("../user/profile.php");

	}



?>