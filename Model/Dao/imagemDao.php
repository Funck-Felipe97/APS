<?php 
	include 'banco.php';

	/**
	* 
	*/
	class ImagemDao
	{
		private $connection;

		function __construct(argument)
		{
			$this->connection = getConnection();
		}

		public function insere_imagem($funcionario){
			$sql = "INSERT INTO tb_imagem (img_nome, img_imagem);";
			$stmt = $this->connection->prepare($sql);
			
			$stmt->execute(
				array());

		}
	}

?>