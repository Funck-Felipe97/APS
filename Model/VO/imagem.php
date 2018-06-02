<?php 

	/**
	* @Funck
	*/
	class Imagem{
		
		private $id;
		private $nome;
		private $tamanho;
		private $conteudo;

		function __construct($nome = "" , $tamanho = "" , $conteudo = null , $id = null){
			$this->id = $id;
			$this->nome = $nome;
			$this->tamanho = $tamanho;
			$this->conteudo = $conteudo;
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

		public function getTamanho(){
			return $this->tamanho;
		}

		public function setTamanho($tamanho){
			$this->tamanho = $tamanho;
		}

		public function getConteudo(){
			return $this->conteudo;
		}

		public function setConteudo($conteudo){
			$this->conteudo = $conteudo;
		}

	}

 ?>