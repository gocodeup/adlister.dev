<?php

class User{

	private $id=;
	private $name=:
	private $email=;
	private $password=;
	private $items=[];

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id=$id;
	}

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name=$name;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email=$email;
	}

	public function getPassword(){
		return $this->pasword;
	}

	public function setPassword($password){
		$this->password=$password;
	}
	public function getItems(){
		return $this->items;
	}
	public function setItems(array $items = []){
		$this->items=$items;
	}

}

