<?php 

/**
* 
*/
class tipoUsuario
{
	private $id;
	private $descricao;

	function __construct()
	{
		
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
}

?>