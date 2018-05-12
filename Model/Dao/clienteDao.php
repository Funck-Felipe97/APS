<?php 
	
	include "banco.php";
	include_once "../Vo/cliente.php";

	/**
	* @Funck
	*/
	class ClienteDao{
		
		private $connection;

		public function __construct(){
			$this->connection = getConnection();
		}

		public function insere_cliente($cliente){
			$sql = "CALL insere_cliente(? , ? , ? , ? , ? , ? , ? , ? , ?);";
			$stmt = $this->connection->prepare($sql);
			
			$stmt->execute(
				array($cliente->getNome() ,
					  $cliente->getCpf() ,
					  $cliente->getSenha() ,
					  $cliente->getUser() ,
					  $cliente->getData_nascimento() ,
					  $cliente->getEndereco()->getRua() ,
					  $cliente->getEndereco()->getBairro() ,
					  $cliente->getEndereco()->getCidade() ,
					  $cliente->getEndereco()->getNumero()
					));
		}

		public function listar_clientes_todos(){
			$sql = "CALL listar_clientes_todos();";
			$stmt = $this->connection->prepare($sql);
			$stmt->execute();
			
			$clientes = array();
			foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $linha) {
				$cliente = $this->preenche_cliente($linha);
				$clientes[] = $cliente;
	
			}
			return $clientes;
		}

		public function buscar_cliente_id($id){
			$sql = "CALL buscar_cliente_id(?);";
			$stmt = $this->connection->prepare($sql);
			$stmt->execute(array($id));
			$cliente = $this->preenche_cliente($stmt->fetch(PDO::FETCH_ASSOC));
			return $cliente;
		}

		public function atualizar_cliente($cliente){
			$sql = "CALL atualizar_cliente(? , ? , ? , ? , ? , ?);";
			$stmt = $this->connection->prepare($sql);
			
			$stmt->execute(
				array($cliente->getId(),
					  $cliente->getNome() ,
					  $cliente->getCpf() ,
					  $cliente->getSenha() ,
					  $cliente->getUser() ,
					  $cliente->getData_nascimento()
					));
		}

		public function buscar_cliente_user($user){
			$sql = "CALL buscar_cliente_user(?);";
			$stmt = $this->connection->prepare($sql);
			$stmt->execute(array($user));
			$cliente = $this->preenche_cliente($stmt->fetch(PDO::FETCH_ASSOC));
			return $cliente;
		}

		public function buscar_cliente_cpf($cpf){
			$sql = "CALL buscar_cliente_cpf(?);";
			$stmt = $this->connection->prepare($sql);
			$stmt->execute(array($cpf));
			$cliente = $this->preenche_cliente($stmt->fetch(PDO::FETCH_ASSOC));
			return $cliente;
		}

		private function preenche_cliente($linha){
			$cliente = new Cliente();
			$cliente->setId($linha["cli_id"]);
			$cliente->setNome($linha["cli_nome"]);
			$cliente->setCpf($linha["cli_cpf"]);
			$cliente->setUser($linha["cli_user_name"]);
			$cliente->setSenha($linha["cli_senha"]);
			$cliente->setData_nascimento($linha["cli_data_nasc"]);

			$end = new Endereco();
			$end->setRua($linha["end_rua"]);
			$end->setBairro($linha["end_bairro"]);
			$end->setCidade($linha["end_cidade"]);
			$end->setId($linha["end_id"]);

			$cliente->setEndereco($end);
			return $cliente;
		}
	}

 ?>