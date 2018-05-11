<?php 

	include_once "funcionario.php";
	include_once "cliente.php";
	include_once "servico.php";
	include_once "horario.php";

	/**
	* @Funck
	*/
	class Agenda{
		
		private $id;
		private $horario;
		private $funcionario;
		private $servico;
		private $cliente;
		private $data;

		function __construct(){
			
		}

		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function getHoarario(){
			return $this->horario;
		}

		public function setHorario($horario){
			$this->horario = $horario;
		}

		public function getFuncionario(){
			return $this->funcionario;
		}

		public function setFuncionario($funcionario){
			$this->funcionario = $funcionario;
		}

		public function getServico(){
			return $this->servico;
		}

		public function setServico($servico){
			$this->servico = $servico;
		}

		public function getCliente(){
			return $this->cliente;
		}

		public function setCliente($cliente){
			$this->cliente = $cliente;
		}

		public function getData(){
			return $this->data;
		}

		public function setData($data){
			$this->data = $data;
		}
	}

 ?>