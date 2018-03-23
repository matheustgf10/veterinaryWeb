<?php 

class Vaccines(){

	$id;
	$name;
	$codNumber;
	$description;
	$dosage;
	$group; // grupo de animais que tomam esta vacina 

	public Vaccines(){

	}

	public function getId(){
		return $this->id;
	}

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getCodNumber(){
		return $this->codNumber;
	}

	public function setCodNumber($codNumber){
		$this->codNumber = $codNumber;
	}

	public function getDescription(){
		return $this->description;
	}

	public function setDescription($description){
		$this->description = $description;
	}

	public function getDosage(){
		return $this->dosage;
	}

	public function setDosage($dosage){
		$this->dosage = $dosage;
	}

	public function getGroup(){
		return $this->group;
	}

	public function setGroup(){
		$this->group = $group;
	}
}