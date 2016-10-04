<?php

class ItemModel{

	private $name=;
	private $id=:
	private $description=;
	private $price=;
	private $url=;
	private $email=;

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

	public function getDescription(){
		return $this->email;
	}

	public function setDescription($description){
		$this->description=$description;
	}

	public function getPrice(){
		return $this->price;
	}

	public function setPrice($price){
		$this->price=$price;
	}

	public function getUrl(){
		return $this->url;
	}

	public function setUrl($url){
		$this->url=$url;
	}

	public function getEmail(){
		return $this->price;
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

}