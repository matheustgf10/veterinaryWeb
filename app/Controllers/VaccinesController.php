<?php 

	require_once "../DAO/VaccinesDAO.php";
	require_once "../Models/Vaccines.php";

class VaccinesController(){

	$idVaccines = $_POST['id'];
	$nameVaccines = $_POST['name'];
	$codNumberVaccines = $_POST['cordNumber'];
	$descriptionVaccines = $_POST['description'];
	$dosageVaccines = $_POST['dosage'];
	$groupVaccins = $_POST['group'];


	public VaccinesController(){
		$vaccines = Vaccines();
		$vaccinesDao = VaccinesDAO();
	}

	public function index(){
		header("location: ../views/Vaccines/index.php");
	}

	// <>
	// 	pegar o tipo de informação via uri, e tratar 
	// </>
	

	public function searchName($name){
		$vaccines->setName($name);
		$vaccinesDao->searchVaccines($vaccines);

	}

	public function create($name, $codNumber, $description, $dosage, $group){
		$vaccines->setName($name);
		$vaccines->setCodNumber($codNumber);
		$vaccines->setDescription($description);
		$vaccines->setDosage($dosage);
		$vaccines->setGroup($group);

		$vaccinesDao->createVaccines($vaccines);
	}

	public function alter($id){
		$vaccines->setId($id);
		$vaccinesDao->alterVaccines($vaccines);

	}

	public function drop($id){
		$vaccines->setId();
		$vaccinesDao->dropVaccines($vaccines);
	}

}