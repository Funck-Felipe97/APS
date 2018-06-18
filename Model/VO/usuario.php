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
		
	
		function __construct($nome = null,$cpf = null,$data = null,$email = null, $numero = null , $cidade = null,$bairro = null,$rua = null,$user = null,$senha = null){
			$this->nome = $nome;
			$this->cpf = $cpf;
			$this->data_nascimento = $data;
			$this->user = $user;
			$this->senha = $senha;
			$this->endereco = new Endereco($rua , $bairro , $cidade , $numero); 
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

	}

 ?>