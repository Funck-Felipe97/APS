<?php 

	include "banco.php";
	
	class ServicoDao{

		private $connection;

		function __construct()
		{
			$this->connection = getConnection();
		}

		public function listar_servicos_todos(){
			$sql = "SELECT *FROM tb_servicos;";
			$stmt = $this->connection->prepare($sql);
			$stmt->execute();
			
			$servicos = array();
			foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $linha) {
				$servico = $this->preencher_servico($linha);
				$servicos[] = $servico;
	
			}
			return $servicos;
		}

		private function preencher_servico($linha){
			$servico = new Servico();
			$servico->setDescricao($linha["ser_descricao"]);
			$servico->setPreco($linha["ser_preco"]);
			return $servico;
		}
	}

?>