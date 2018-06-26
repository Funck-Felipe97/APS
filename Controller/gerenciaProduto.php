<?php 
	
	include "../Model/VO/produto.php";
	include "../Model/Dao/produtoDao.php";

	if(isset($_POST["op"])){
		switch ($_POST["op"]) {
			case "cadastrarProduto":
				cadastrar();
				break;
			default:
				break;
		}
	}

	function cadastrar(){
		$imagem = new Imagem(
								$_FILES["imagem"]["name"],
								$_FILES["imagem"]["size"],
								file_get_contents($_FILES["imagem"]["tmp_name"])
							 );
		
		$produto = new Produto($_POST["descricao"] , $_POST["preco"] , $imagem);
		$produtoDao = new ProdutoDao();
		
		if($produtoDao->inserir_produto($produto))
			echo(
				"<script>
					alert('Produto cadastrado com sucesso');
				 </script>
				"
			);
		else 
			echo(
				"<script>
					alert('Erro ao realizar cadastro');
				 </script>
				"
			);
		
		echo "<META HTTP-EQUIV=Refresh CONTENT=\"0; URL=http://localhost/APS/app/admin.php\">";
	}

	function listar_produtos_todos(){
		$produtoDao = new ProdutoDao();
		return $produtoDao->listar_produtos_todos();
	}



 ?>