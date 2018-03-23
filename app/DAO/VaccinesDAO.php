<?php 

require_once "Connection.php";
 
class VaccinesDAO{

	$return;

	public VaccinesDAO(){
		$connection = new Connection();
		$connection->createConnection();

	}

	public function createVaccine($vaccine){
		$sql = "INSERT INTO vaccines(nameVaccine, numberVaccine, descriptionVaccine, dosageVaccine, groupVaccine) VALUES (?,?,?,?,?)";
		$execution->prepare($sql);
		$execution->bindValue(1, $vaccine->getName());
		$execution->bindValue(2, $vaccine->getCodNumber());
		$execution->bindValue(3, $vaccine->getDescription());
		$execution->bindValue(4, $vaccine->getDosage());
		$execution->bindValue(5, $vaccine->getGroup());
		$execution->execute();

		if ($execution->numberRow() > 0) {
			$this->return = "success";
		}else{
			$this->return = "error";
		}

	}

	public function deleteVaccine($vaccine){
		$sql = "UPDATE vaccines SET flagVaccine = 0 WHERE idVaccine = ?";
		$execution->prepare($sql);
		$execution->bindValue(1, $vaccine->getId());
		$execution->execute();

		if($execution->numberRow() > 0){
			$this->return = "success";
		}else{
			$this->return = "error";
		}
	}

	public function alterVaccine($vaccine){
		$sql = "UPDATE vaccines SET nameVaccine = ?, numberVaccine = ?, descriptionVaccine = ?, dosageVaccine = ?, groupVaccine = ? WHERE idVaccine = ?";
		$execution->prepare($sql);
		$execution->bindValue(1,$vaccine->getName());
		$execution->bindValue(2,$vaccine->getCodNumber());
		$execution->bindValue(3,$vaccine->getDescription());
		$execution->bindValue(4,$vaccine->getDosage());
		$execution->bindValue(5,$vaccine->getGroup());
		$execution->bindValue(6,$vaccine->getId());
		$execution->execute();

		if ($execution->numberRow() > 0) {
			$this->return = "success";
		}else{
			$this->return = "error";
		}
	}
	public function listAllVaccines(){
		$sql = "SELECT * FROM vaccines";
		$execution->prepare($sql);
		$execution->execute();

		if($execution->numberRow() > 0){
			while($row = $execution->fetch(PDO::FETCH_ASSOC)){
				return "<tbody>
							<td>".$row['idVaccine']."</td>
							<td>".$row['nameVaccine']."</td>
							<td>".$row['numberVaccine']."</td>
							<td>".$row['descriptionVaccine']."</td>
							<td>".$row['dosageVaccine']."</td>
							<td>".$row['groupVaccine']."</td>
						</tbody>";
			}
		}
	}	
	public function listVaccine($vaccine){
		$sql = "SELECT * FROM vaccines WHERE idVaccine = ?";
		$execution->prepare($sql);
		$execution->bindValue(1, $vaccine->getId());
		$execution->execute();

		if($execution->numberRow() > 0){
			return "<tbody>
						<td>".$row['idVaccine']."</td>
						<td>".$row['nameVaccine']."</td>
						<td>".$row['numberVaccine']."</td>
						<td>".$row['descriptionVaccine']."</td>
						<td>".$row['dosageVaccine']."</td>
						<td>".$row['groupVaccine']."</td>
					</tbody>";
		}
	}
}	