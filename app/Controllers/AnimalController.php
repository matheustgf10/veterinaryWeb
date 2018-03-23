<?php 

require_once "../Models/Animal.php";
require_once "../DAO/AnimalDAO.php";

class AnimalController{

	$id 	 = $_SESSION['idAnimal'];
	$name    = $_POST['nameAnimal'];
	$species = $_POST['speciesAnimal'];
	$beed    = $_POST['beedAnimal'];
	$age     = $_POST['ageAnimal'];
	$stature = $_POST['statureAnimal'];


	public AnimalController(){
		$animal = Animal();
		$animalDAO = AnimalDAO();
	}

	public function index(){
		header("location: ../Views/Animal/index.php");
	}

	//	<>
	//		pegar tipo de ação por uri, e tratar
	// 	</>

	public function create(){
		$animal->setName($this->name);
		$animal->setSpecies($this->species);
		$animal->setBeed($this->beed);
		$animal->setAge($this->age);
		$animal->setStatute($this->stature);

		$animaDao->createAnimal($animal);
	}

	public function alter(){
		$animal->setName($this->name);
		$animal->setSpecies($this->species);
		$animal->setBeed($this->beed);
		$animal->setAge($this->age);
		$animal->setStatute($this->stature);

		$animalDAO->alterAnimal($animal);
	}

	public function delete(){
		$animal->setId($this->id);

		$animalDAO->deleteAnimal($animal);
	}

	public function search(){
		$animal->setName($this->name);
		
	}

	public function listAll(){
		$animalDAO->listAllAnimals();
	}


}