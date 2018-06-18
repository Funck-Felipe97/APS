<?php 
	
	include "../Model/VO/cliente.php";
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
			12,
			$_POST["cidade"],
			$_POST["bairro"],
			$_POST["rua"],
			$_POST["user"],
			$_POST["senha"]
		);
		var_dump($cliente);
		$clienteDao->insere_cliente($cliente);
	}

	function listar_produtos_todos(){
		$produtoDao = new ProdutoDao();
		return $produtoDao->listar_produtos_todos();
	}



 ?>