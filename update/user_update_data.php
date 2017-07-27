<?php
	require_once("../classes/ini.php");

	$photo= new Photo();

	$img= $_FILES['user_photo'];

	$photo->name=$img['name'];
	$photo->size=$img['size'];
	$photo->photo_path="user_photos/".$photo->name;
	$photo->user_id=$_SESSION['user_id'];
	
	$current= $_POST['current_photo'];



	$photo->up_load_photo($img, $current, $photo->user_id);

	$db->redirect("../user/edit_profile.php");




?>