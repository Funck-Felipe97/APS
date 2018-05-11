<?php 
	/**
	* @Funck
	*/
	class Horario{
		
		private $id;
		private $data;
		private $inicio;
		private $fim;

		function __construct(){
			
		}

		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function getData(){
			return $this->data;
		}

		public function setData($data){
			$this->data = $data;
		}

		public function getInicio(){
			return $this->inicio;
		}

		public function setInicio($inicio){
			$this->inicio = $inicio;
		}

		public function getFim(){
			return $this->fim;
		}

		public function setFim($fim){
			$this->fim = $fim;
		}
	}
 ?>