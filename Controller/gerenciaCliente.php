<?php 
	
	include "../Model/VO/usuario.php";
	include "../Model/Dao/clienteDao.php";

	if(isset($_POST["op"])){
		switch ($_POST["op"]) {
			case "cadastrarCliente":
				cadastrar();
				break;
			default:
				break;
		}
	}

	function cadastrar(){
		$clienteDao = new ClienteDao();
		$cliente = new Cliente(
			$_POST["nome"],
			$_POST["cpf"],
			$_POST["data"],
			$_POST["email"],
			$_POST["telefone"],
			$_POST["cidade"],
			$_POST["bairro"],
			$_POST["rua"],
			$_POST["user"],
			$_POST["senha"],
		);

		$clienteDao->insere_cliente($cliente);
	}

	function listar_produtos_todos(){
		$produtoDao = new ProdutoDao();
		return $produtoDao->listar_produtos_todos();
	}



 ?>