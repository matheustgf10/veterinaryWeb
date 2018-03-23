<?php 

class Human{

	$id;
	$firstname;
	$lastname;
	$login;
	$password;
	$age;
	$email;
	$phone;
	$gender;
	$typeHuman;
	

	public Human(){

	}

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getFirstName(){
		return $this->firstname;
	}

	public function setFirstName($firstname){
		$this->firstname = $firstname;
	}

	public function getLastName(){
		return $this->lastname;
	}

	public function setLastName($lastname){
		$this->lastname = $lastname;
	}

	public function getLogin(){
		return $this->login;
	}

	public function setLogin($login){
		$this->login = $login;
	}

	public function getPassword(){
		return $this->password;
	}

	public function setPassword($password){
		$this->password = $password;
	} 

	public function getAge(){
		return $this->age;
	}

	public function setAge($age){
		$this->age = $age;		
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getPhone(){
		return $this->phone;
	}

	public function setPhone($phone){
		$this->phone = $phone; 
	}

	public function getGender(){
		return $this->gender;
	}

	public function setGender($gender){
		$this->gender = $gender;
	}

	public function getCPF(){
		return $this->cpf;
	}

	public function setCPF($cpf){
		$this->cpf = $cpf;
	}

	public function getRG(){
		return $this->rg;
	}

	public function setRG($rg){
		$this->rg = $rg;
	}

	public function getTypeHuman(){
		return $this->typeHuman;
	}

	public function setTypeHuman($typeHuman){
		$this->typeHuman = $typeHuman;
	}
}