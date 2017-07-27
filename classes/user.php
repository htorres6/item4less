<?php 
class User extends Object {

	protected static $table_columns= array("first_name","last_name", "address", "email", "user_name", "password");
	protected static $table= "users";
	protected static$where_clause= "id";

	public $first_name;
	public $last_name;
	public $address;
	public $email;
	public $user_name;
	public $password;
	

//READ**
	public function get_user($username, $psw){
		global $db;

//COMMUNICATING WITH THE DATABASE "dataless"
		$sql="SELECT * FROM users WHERE user_name='$username' AND password='$psw'";
		
		$sql_result=$db->query($sql);

		return $sql_result->fetch_object();
	}

//DELETE**
	public function delete(){
	
	}


}//END OF CLASS


?>