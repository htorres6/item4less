<?php 
require_once("../classes/ini.php");

//NEW OBJECT user CREATED
$user= new User();

//PROPER SYNTAX FOR user OBJECT
$user->first_name= $db->escape_string($_POST['first_name']);
$user->last_name= $db->escape_string($_POST['last_name']);
$user->address= $db->escape_string($_POST['address']);
$user->email= $db->escape_string($_POST['email']);

$user->user_name= $db->escape_string($_POST['user_name']);
$temp_pass= $db->escape_string($_POST['password']);
$user->password= md5($temp_pass, $user->user_name);

$_SESSION['user_id']= $user->create();
Session::set_message("<h2 class='alert alert-success text-center'>wELcomE ".$user->first_name."</h2>");


$db->redirect('../user/profile.php');
































?>