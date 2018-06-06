<?php 

	include_once "endereco.php";
	include_once "cargo.php";

	/**
	* @Funck
	*/
	class Usuario{
		
		private $id;
		private $nome;
		private $cpf;
		private $user;
		private $senha;
		private $data_nascimento;
		private $endereco;
		private $cargo;

		public function __construct(){
			
		}
			

		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function getNome(){
			return $this->nome;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function getCpf(){
			return $this->cpf;
		}

		public function setCpf($cpf){
			$this->cpf = $cpf;
		}

		public function getUser(){
			return $this->user;
		}

		public function setUser($user){
			$this->user = $user;
		}

		public function getSenha(){
			return $this->senha;
		}

		public function setSenha($senha){
			$this->senha = $senha;
		}

		public function getData_nascimento(){
			return $this->data_nascimento;
		}

		public function setData_nascimento($data_nascimento){
			$this->data_nascimento = $data_nascimento;
		}

		public function getEndereco(){
			return $this->endereco;
		}

		public function setEndereco($endereco){
			$this->endereco = $endereco;
		}

		public function getCargo(){
			return $this->cargo;
		}

		public function setCargo($cargo){
			$this->cargo = $cargo;
		}
	}

 ?>