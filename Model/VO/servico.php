<?php 
	
	/**
	* @Funck
	*/
	class Servico{
		
		private $id;
		private $descricao;
		private $preco;


		function __construct(){
			
		}

		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function getDescricao(){
			return $this->descricao;
		}

		public function setDescricao($descricao){
			$this->descricao = $descricao;
		}

		public function getPreco(){
			return $this->preco;
		}

		public function setPreco($preco){
			$this->preco = $preco;
		}
	}

 ?>