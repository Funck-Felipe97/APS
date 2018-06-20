<?php 
	session_start();

	include "../Model/VO/cliente.php";
	include "../Model/Dao/clienteDao.php";

	if(isset($_POST["op"])){
		switch ($_POST["op"]) {
			case "cadastrarCliente":
				cadastrar();
				break;
			case "login":
				buscarCliente();
				break;
			default:
				break;
		}
	}

	function cadastrar(){
		$clienteDao = new ClienteDao();

		$cliente = new Cliente();
		$cliente->setNome($_POST["nome"]);
		$cliente->setCpf($_POST["cpf"]);
		$cliente->setData_nascimento($_POST["data"]);
		$cliente->setSenha($_POST["senha"]);
		$cliente->setUser($_POST["user"]);

		$endereco = new Endereco();
		$endereco->setCidade($_POST["cidade"]);
		$endereco->setBairro = $_POST["bairro"];
		$endereco->setRua = $_POST["rua"];
		
		$cliente->setEndereco($endereco);

		$clienteDao->insere_cliente($cliente);
	}

	function buscarCliente(){
		$clienteDao = new ClienteDao();

		$cliente = new Cliente();

		$cliente->setUser($_POST["nome"]);
		$cliente->setSenha($_POST["senha"]);
		

		$cliente = $clienteDao->buscar_cliente_login($cliente);
		


		if (count($cliente->getUser()) > 0) {
			$_SESSION["user"] = $cliente->getUser();

			if(isset($_POST["lembrar"])){
				$cli = $cliente->getUser();
				$pass= $cliente->getSenha();
				setcookie("usuario", $cli);
				setcookie("pass", $pass);
			}
			header("Location:../App/index.php");
		}else{
			echo "<script>alert('NOME OU SENHA INVALIDOS')</script>";
			echo "<META HTTP-EQUIV=Refresh CONTENT=\"0; URL=http://localhost:8080/APS/App/login.php\">";
			#header("Location:../App/login.php");

		}
		
	}


 ?>