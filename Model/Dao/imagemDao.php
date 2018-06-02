<?php 
	include 'banco.php';
	include '../VO/imagem.php';
	
	class ImagemDao
	{
		private $connection;

		function __construct()
		{
			$this->connection = getConnection();
		}

		public function insere_imagem($imagem){
			$sql = "INSERT INTO tb_imagem (img_nome,img_tamanho, img_imagem) VALUES (?, ?, ?);";
			$stmt = $this->connection->prepare($sql);
			
			$stmt->execute(
				array(
					$imagem->getNome() ,
					$imagem->getTamanho() ,
					$imagem->getConteudo()
				));

		}

		public function listar_imagem_todas(){
			$sql = "SELECT * FROM tb_imagem";
 			$stmt = $pdo->prepare($sql);
 			$stmt->execute(array());
 			
 			$imagem = array();
			foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $linha) {
				$imagem = $this->preencher_imagem($linha);
				$imagens[] = $imagem;
	
			}
			return $imagens;
 			
		}

		public function preencher_imagem($linha){
			$imagem = new Imagem();
			$imagem->setNome($linha["img_nome"]);
			$imagem->setTamanho($linha["img_tamanho"]);
			$imagem->setConteudo($linha["img_imagem"]);
			
			return $imagem;
		}
	}

?>