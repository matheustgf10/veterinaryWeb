<?php 

require_once "Connection.php";

class AnimalDAO{

	$return;

	public AnimalDAO(){
		$connection = new Connection();
		$connection->createConnection();


	}

	public function createAnimal($animal){
		$sql = "INSERT INTO animal() VALUES(?,?,?,?,?)";

		$execution->prepare($sql);
		$execution->bindValue(1, $animal->getName());
		$execution->bindValue(1, $animal->getSpecies());
		$execution->bindValue(1, $animal->getBeed());
		$execution->bindValue(1, $animal->getAge());
		$execution->bindValue(1, $animal->getStature());
		$execution->execute();

		if($execution->numberRow() > 0){
			$this->return .= "success";
		}else{
			$this->return = "error";
		}

		return $this->return;
	}
	public function deleteAnimal($animal){
		$sql = "UPDATE animal SET flagAnimal = 0 WHERE idAnimal = ?";
		
		$execution->prepare($sql);
		$execution->bindValue(1, $animal->getId());
		$execution->execute();

		if($execution->numberRow() > 0){
			$this->return = "success";
		}else{
			$this->return = "error";
		}

		return $return;
	}
	
	public function alterAnimal($animal){
		$sql = "UPDATE animal SET nameAnimal = ?, speciesAnimal = ?, beedAnimal = ?, ageAnimal = ?, statureAnimal = ? WHERE idAnimal = ?";
		$execution->prepare($sql);
		$execution->bindValue(1, $animal->getName());
		$execution->bindValue(2, $animal->getSpecies());
		$execution->bindValue(3, $animal->getBeed());
		$execution->bindValue(4, $animal->getAge());
		$execution->bindValue(5, $animal->getStature());
		$execution->bindValue(6, $animal->getIdValue());
		$execution->execute();

		if($execution->numberRow() > 0){
			$return = "success";
		}else{
			$return = "error";
		}

		return $return;
	}

	public function listALlAnimals($animal){
		$sql = "SELECT * FROM animal";
		$execution->prepare($sql);
		$execution->execute();

		if ($execution->numberRow() > 0) {
			while($row = $execution->fetch(PDO::FETCH_ASSOC)){
				return "<tbody>
							<td>".$row['idANima']."</td>
							<td>".$row['nameAnimal']."</td>
							<td>".$row['speciesAnimal']."</td>
							<td>".$row['beedAnimal']."</td>
							<td>".$row['ageAnimal']."</td>
							<td>".$row['statureAnimal']."</td>
						</tbody>";
			}
		}

	}
	
	public function listAnimalForSpecie($animal){
		$sql = "SELECT * FROM animal WHERE species_animal = ?";

		$execution->prepare($sql);
		$execution->bindValue(1, $animal->getSpecies());
		$execution->execute();

		if($execution->rowCount() > 0){
			return "success";
		}else{
			return "error";
		}

	}

	public function listAnimalForBeed($animal){
		$sql = "SELECT * FROM animal WHERE beed_animal = ?";

		$execution->prepare($sql);
		$execution->bindValue(1, $animal->getBeed());
		$execution->execute();

		if($execution->rowCOunt() > 0){
			return "success";
		}else{
			return "error";
		}
	}	
	public function listMyAnimals(){
		
	}

}
