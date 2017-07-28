<?php
	require_once("../classes/ini.php");

	// PHOTO OBJECT
	$photo= new Photo();
	$user= new User();


	$img= $_FILES['user_photo'];

	if ($img['size'] > 0) {
		$photo->name=$img['name'];
		$photo->size=$img['size'];
		$photo->photo_path="user_photos/".$photo->name;
		$photo->user_id=$_SESSION['user_id'];
		$current= $_POST['current_photo'];
		if ($photo->up_load_photo($img, $current, $photo->user_id)) {
			Session::set_message("<h2 style='background-color: orange'>Your photo has been updated</h2>");
		}

		$user->first_name= $db->escape_string($_POST['first_name']);
		$user->last_name= $db->escape_string($_POST['last_name']);
		$user->email= $db->escape_string($_POST['email']);
		$user->update($_SESSION['user_id']);

	}else{
		$user->first_name= $db->escape_string($_POST['first_name']);
		$user->last_name= $db->escape_string($_POST['last_name']);
		$user->email= $db->escape_string($_POST['email']);
	

		if ($user->update($_SESSION['user_id'])) {
			Session::set_message("Your info has been updated");
		}

	}



	//escape values coming in from form
	


	$db->redirect("../user/edit_profile.php");





	// if ($photo->up_load_photo()) {
	//	Session::set_message("<p style='background-color: red;'>PHOTO UPLOAD FUNCTION FAILED</p>");
	// 	$db->redirect("../user/edit_profile.php");
	// } else{
	// 	Session::set_message("<p style='background-color: green;'>PHOTO UPDATE COMPLETE</p>");
	
	// }	





?>


