<?php
	
class Photo{
	
	public $name;
	public $size;
	public $photo_path;
	public $user_id;

	public function up_load_photo($name, $current_photo, $id){
		global $db;

		// $temp_name WILL BE THE $name of the photo file
		$temp_name= $name['tmp_name'];
		$name= $name['name'];
		// $target WILL BE MY destination
		$target= $this->photo_path;

		if (file_exists($current_photo)){
			unlink($current_photo);
			$sql2="DELETE FROM photos WHERE user_id='$id'";
			$db->query($sql2);
		}

		if (move_uploaded_file($temp_name, $target)){
			$sql="INSERT INTO photos(name, size, photo_path, user_id) VALUES('$name', '$this->size', '$this->photo_path', '$id')";

			$db->query($sql);
			return true;
		}
		
	}

}// END OF CLASS


?>