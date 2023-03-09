<?php

require_once('Database.php');

class EmployeeModel extends Database {

public function __construct() {
	parent::__construct();
	$this->table = 'users';
	$this->fields = "Last_Name,First_Name_Username,Password,Photo,role";
}

public function newUser($formvalues) {
	$statement = "(" . $this->fields . ") VALUES (?,?,?,?,?)";
	$this->create($statement,$formvalues);
}

public function updateUser($formvalues) {
	$statement = " SET Last_Name=?,First_Name=?,Username=?,password=?,Photo=?,roleo=?  WHERE id=?";
	$this->update($statement,$formvalues);
}

public function deleteUser($id) {
	//code to be sure the deletion should happen
	$this->delete($id);
}


}