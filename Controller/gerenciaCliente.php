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
		$cliente = new Cliente();
		$cliente->setNome = $_POST["nome"];
		$cliente->setCpf = $_POST["cpf"];
		$cliente->setData = $_POST["data"];
		$cliente->setEmail = $_POST["email"];
		$cliente->setTelefone = $_POST["telefone"];
		$cliente->setCidade = $_POST["cidade"];
		$cliente->setBairro = $_POST["bairro"];
		$cliente->setRua = $_POST["rua"];
		$cliente->setUser = $_POST["user"];
		$cliente->setSenha = $_POST["senha"];
		

		$clienteDao->insere_cliente($cliente);
	}

	function listar_produtos_todos(){
		$produtoDao = new ProdutoDao();
		return $produtoDao->listar_produtos_todos();
	}



 ?>