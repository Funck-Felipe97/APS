<?php 
	
	include "banco.php";
	
	/**
	* @Funck
	*/
	class FuncionarioDao{
		
		private $connection;

		function __construct(){
			$this->connection = getConnection();
		}

		public function insere_funcionario($funcionario){
			$sql = "CALL insere_funcionario(? , ? , ? , ? , ? , ? , ? , ? , ? , ?);";
			$stmt = $this->connection->prepare($sql);
			
			return $stmt->execute(
				array($funcionario->getNome() ,
					  $funcionario->getCpf() ,
					  $funcionario->getSenha() ,
					  $funcionario->getUser() ,
					  $funcionario->getData_nascimento() ,
					  $funcionario->getCargo()->getId()	,
					  $funcionario->getEndereco()->getRua() ,
					  $funcionario->getEndereco()->getBairro() ,
					  $funcionario->getEndereco()->getCidade() ,
					  $funcionario->getEndereco()->getNumero()
					));

		}

		public function listar_funcionarios_todos(){
			$sql = "CALL listar_funcionarios_todos();";
			$stmt = $this->connection->prepare($sql);
			$stmt->execute();
			
			$funcionarios = array();
			foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $linha) {
				$funcionario = $this->preenche_funcionario($linha);
				$funcionarios[] = $funcionario;
	
			}
			return $funcionarios;
		}

		public function buscar_funcionario_id($id){
			$sql = "CALL buscar_funcionario_id(?);";
			$stmt = $this->connection->prepare($sql);
			$stmt->execute(array($id));
			$funcionario = $this->preenche_funcionario($stmt->fetch(PDO::FETCH_ASSOC));
			return $funcionario;
		}

		public function atualizar_funcionario($funcionario){
			$sql = "CALL atualizar_funcionario(? , ? , ? , ? , ? , ? , ?);";
			$stmt = $this->connection->prepare($sql);
			
			$stmt->execute(
				array($funcionario->getId(),
					  $funcionario->getNome() ,
					  $funcionario->getCpf() ,
					  $funcionario->getSenha() ,
					  $funcionario->getUser() ,
					  $funcionario->getData_nascimento(),
					  $funcionario->getCargo()->getId()
					));
		}

		public function buscar_funcionario_user($user){
			$sql = "CALL buscar_funcionario_user(?);";
			$stmt = $this->connection->prepare($sql);
			$stmt->execute(array($user));
			$funcionario = $this->preenche_funcionario($stmt->fetch(PDO::FETCH_ASSOC));
			return $funcionario;
		}

		public function buscar_funcionario_cpf($cpf){
			$sql = "CALL buscar_funcionario_cpf(?);";
			$stmt = $this->connection->prepare($sql);
			$stmt->execute(array($cpf));
			$funcionario = $this->preenche_funcionario($stmt->fetch(PDO::FETCH_ASSOC));
			return $funcionario;
		}

		private function preenche_funcionario($linha){
			$funcionario = new Funcionario();
			$funcionario->setId($linha["fun_id"]);
			$funcionario->setNome($linha["fun_nome"]);
			$funcionario->setCpf($linha["fun_cpf"]);
			$funcionario->setUser($linha["fun_user_name"]);
			$funcionario->setSenha($linha["fun_senha"]);
			$funcionario->setData_nascimento($linha["fun_data_nasc"]);

			$end = new Endereco();
			$end->setRua($linha["end_rua"]);
			$end->setBairro($linha["end_bairro"]);
			$end->setCidade($linha["end_cidade"]);
			$end->setId($linha["end_id"]);

			$car = new Cargo();
			$car->setDescricao($linha["car_descricao"]);
			$car->setId($linha["car_id"]);

			$funcionario->setEndereco($end);
			$funcionario->setCargo($car);
			return $funcionario;
		}

	}
	  
 ?>