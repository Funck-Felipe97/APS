<?php 

	include "imagem.php";

	/**
	 * @Funck
	 */
	class Produto
	{
		
		private $id;
		private $descricao;
		private $preco;
		private $imagem;

		function __construct($descricao = "" , $preco = 0.0, $imagem = null , $id = null){
			$this->descricao = $descricao;
			$this->preco = $preco;
			$this->imagem = $imagem;
			$this->id = $id;
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

		public function getImagem(){
			return $this->imagem;
		}

		public function setImagem($imagem){
			$this->imagem = $imagem;
		}
	}

 ?>