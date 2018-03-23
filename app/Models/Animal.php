<?php 

class Animal{

	$id;
	$name;
	$species;
	$breed;
	$age;
	$stature;

	public Animal(){
		
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

	public function getSpecies(){
		return $this->species;
	}
	
	public function setSpecies($species){
		$this->especies = $species;
	}

	public function getBreed(){
		return $this->breed;
	}
	
	public function setBreed($breed){
		$this->breed = $breed;
	}
	
	// public function get(){
	// 	return $this->;
	// }
	
	// public function set($){
	// 	$this-> = $;
	// }
	
	// public function get(){
	// 	return $this->;
	// }
	
	// public function set($){
	// 	$this-> = $;
	// }

	public function getAge(){
		return $this->age;
	}

	public function setAge(){
		$this->age = $age;
	}

}