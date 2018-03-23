<?php 

class HumanController{

	$login;
	$password;

	public HumanController($login, $password){

	}

	public function index(){

	}

	public function redirectAdmin(){
		header("location: AdminController.php");
	}

	public function redirectUser(){
		header("location: VeterinaryController.php");

	}

	public function redirectVeterinary(){
		header("location: VeterinaryController.php");
	}

}