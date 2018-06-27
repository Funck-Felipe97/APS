<?php 
	include "banco.php";
	
	class ProdutoDao{

		private $connection;

		function __construct()
		{
			$this->connection = getConnection();
		}

		public function inserir_produto($produto){
			$sql = "CALL inserir_produto(?, ?, ? , ? , ?);";
			$stmt = $this->connection->prepare($sql);
			
			$img = $produto->getImagem();
			return $stmt->execute(
				array(
					$produto->getDescricao() ,
					$produto->getPreco() ,
					$img->getNome() ,
					$img->getTamanho() ,
					$img->getConteudo()
				));

		}
		public function listar_produtos_todos(){
			$sql = "CALL listar_produtos_todos();";
			$stmt = $this->connection->prepare($sql);
			$stmt->execute();
			
			$produtos = array();
			foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $linha) {
				$produto = $this->preencher_produto($linha);
				$produtos[] = $produto;
	
			}
			return $produtos;
		}

		private function preencher_produto($linha){
			$imagem = new Imagem($linha["img_nome"] , $linha["img_tamanho"] , $linha["img_imagem"] , $linha["img_id"]);
			
			$produto = new Produto($linha["pro_descricao"]  , $linha["pro_preco"] , $imagem , $linha["pro_id"]);
			return $produto;
		}
	}

?>