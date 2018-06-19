<?php 

	session_start();

	include "../Model/VO/funcionario.php";
	include "../Model/Dao/funcionarioDao.php";

	if(isset($_POST["op"])){
		switch ($_POST["op"]) {
			case "cadastrarFuncionario":
				cadastrar();
				break;
			case "login":
				buscarFuncionario();
				break;
			default:
				break;
		}
	}

	function cadastrar(){
		$funcionarioDao = new FuncionarioDao();

		$funcionario = new Funcionario();
		$funcionario->setNome($_POST["nome"]);
		$funcionario->setCpf($_POST["cpf"]);
		$funcionario->setData_nascimento($_POST["data"]);
		$funcionario->setSenha($_POST["senha"]);
		$funcionario->setUser($_POST["user"]);

		$endereco = new Endereco();
		$endereco->setCidade($_POST["cidade"]);
		$endereco->setBairro = $_POST["bairro"];
		$endereco->setRua = $_POST["rua"];
		$endereco->setNumero(9);

		$cargo = new Cargo();
		if($_POST["cargo"] == "Funcionario"){
			$cargo->setId(2);
		}else{
			$cargo->setId(1);
		}
		
		$funcionario->setEndereco($endereco);
		$funcionario->setCargo($cargo);

		var_dump($funcionario);
		$funcionarioDao->insere_funcionario($funcionario);
	}

	function buscarFuncionario(){
		$funcionarioDao = new FuncionarioDao();

		$funcionario = new Funcionario();

		$funcionario->setUser($_POST["nome"]);
		$funcionario->setSenha($_POST["senha"]);
		

		$funcionario = $funcionarioDao->buscar_funcionario_login($funcionario);
		


		if (count($funcionario->getUser()) > 0) {
			$_SESSION["user"] = $cliente->getUser();
			header("Location:../App/index.php");
		}else{
			header("Location:../App/login.php");
		}
		
	}

 ?>