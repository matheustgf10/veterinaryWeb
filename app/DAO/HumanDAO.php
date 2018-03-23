<?php 

require_once "Connection.php";

class HumanDAO{
	
	$connection = Connection();

	public HumanDAO(){
		$connection->createConnection();

	}

	public function createHuman($human){	
		$sql = "INSERT INTO human() VALUES(?,?,?,?,?,?)";
		$execution->prepare($sql);
		$execution->bindValue(? , $human->getId());
		$execution->bindValue(? , $human->getFirstName());
		$execution->bindValue(? , $human->getLastName());
		$execution->execute();

		if($execution->numberRow() > 0){
			$return = "success";

		}else{
			$return = "error";
		}

		$connection->closeConnection();
		return $return;
	}

	public function deleteHuman($human){
		$sql = "UPDATE human SET flagHuman = 0 WHERE idHuman = ?";
		$execution->prepare($sql);
		$execution->bindValue(1, $human->getId());
		$execution->execute();

		if($execution->numberRow() > 0){
			$return = "success";
		}else{
			$return = "error";
		}

		$connection->closeConnection();
		return $return;
	}

	public function alterHUman(){
		$sql = "UPDATE human SET firstNameHuman = ? WHERE idHuman = ?";
		$execution->prepare($sql);
		$execution->bindValue(1, $human->getId());
		$execution->bindValue(2, $human->getFirstName());
		$execution->execute();

		if ($execution->numberRow() > 0) {
			$return = "success";
		}else{
			$return = "error";
		}

		$connection->closeConnection();
		return $return;
	}

	public function listHuman(){
		$sql = "SELECT * FROM human";
		$execution->prepare($sql);
		$execution->execute();

		if($execution > 0){
			while($row = $){
				
			}
		}

		$connection->closeConnection();

	}

