<?php 
	
	include_once "usuario.php";
	include_once "horario.php";

	/**
	* @Funck
	*/
	class Funcionario extends Usuario{
		
		private $cargo;
		private $horarios;

		public function __construct(){
			
		}

		public function getCargo(){
			return $this->cargo;
		}

		public function setCargo($cargo){
			$this->cargo = $cargo;
		}

		public function getHorarios(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}
	}

 ?>