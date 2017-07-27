<?php 

//WE 1st NEED TO CHECK IF OUR NEW DATABASE CONNECTION WORKS
class Database{

	//PROPERTIES
	public $conn;

	function __construct(){
		$this->db_connection();
	}

	public function db_connection(){
		$this->conn= new mysqli("127.0.0.1", "root", "Umb_3rto123", "dataless");

		if ($this->conn->connect_errno){
			die("CONNECTION FAILED ". $this->conn->connect_error);
		}
		return $this->conn;
	}



	public function query($sql){
		$result= $this->conn->query($sql);

	//TESTING FOR query RESULTS
		if (!$result){
			die("QUERY FAILED ". $this->conn->error);
		}
		return $result;
	}


	//LEARN TO USE AN escape_string(); WHEN USING A SUPER GLOBAL POST
	public function escape_string($value){
		return $this->conn->real_escape_string($value);
	}

	//NEED TO redirect TO PROPER LOCATION
	public function redirect($location){
		header('Location: '. $location);
	}

	public function auto_id(){
		return mysqli_insert_id($this->conn);
	}



}//END OF CLASS

//THIS CLASS IS NOW INSTANTIATED
//AVAILABLE THROUGHOUT ANY PAGE

$db= new Database();

//USELESS IF A CONSTRUCTOR IS USED
//$new_con= $db->db_connection();

?>