<?php

class Veterinary extends Human{

	public Veterinary(){
		$human = new Human();
		$human->setFirstName() = "Matheus";
		$human->setLastName() = "FIgueirêdo";
		$human->setLogin() = "matheus123";
		$human->setPassword() = "123";
		$human->setAge() = "19";
		$human->setEmail() = "matheus@mail.com";
		$human->setPhone() = "(99) 9 9999-9999";
		$human->setGender() = "M";
		$human->setCpf() = "123.123.123-12";
		$human->setRg() = "2004930039-9";
		$human->setTypeHuman() = 3;
	}

}