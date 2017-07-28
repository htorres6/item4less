<?php
//CREATING A NEW CLASS
class Object {



//DEFINING THE function create();
	public function create() {
		global $db;
		$prop= $this->class_properties();

							//						//COLUMN NAMES
		$sql="INSERT INTO ". static::$table ."(".implode(", ", array_keys($prop)).")";
		$sql.=" VALUES('".implode("', '", array_values($prop))."');";

		//COMMUNICATE WITH THE DATABASE using the query
		$query=$db->query($sql);
		//TESTING IF THIS PRODUCT INSERT FUNCTUALITY
		if (!$query) {
			die("QUERY PROPERTIES HAVE FAILED.." . $db->conn->error);
		}
		return $db->auto_id();
	}




//DEFINING THE function update();
	public function update($id){
		global $db;
		$prop= $this->class_properties();
		$properties= array();

		foreach ($prop as $key => $value) {
			if (isset($value)) {
				$properties[]="{$key}='{$value}'";
			}
		}

	//LAST_NAME, ADDRESS, STATE, PHONE_NUMBER ARE DELETED
		$sql="UPDATE ". static::$table ." SET ".implode(", ", $properties)." WHERE ".static::$where_clause."='$id'";

		if (!$db->query($sql)) {
			die("update FAILED ... " . $db->conn->error);
		}else{
			return true;
		}
	}




//DEFINING THE function class_properties()
	public function class_properties(){
		$properties= array();

//CREATING A foreoop FOR AN ARRAY
		foreach(static::$table_columns as $column) {
			if (property_exists($this, $column)) {
				$properties[$column]=$this->$column;
			}
		}
		return $properties;
	}

//obstraction 
//create protected static functions 



}//END OF CLASS


?>