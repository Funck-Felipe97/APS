<?php 
	
	include "../Model/VO/servico.php";
	include "../Model/Dao/ServicoDao.php";

	if(isset($_POST["op"])){
		switch ($_POST["op"]) {
			case 'cadastrarServico':
				inserirServico();
				break;			
			default:
				
				break;
		}
	}


	function inserirServico(){

		$servicoDao = new ServicoDao();
		$servico = new Servico();

		$servico->setDescricao($_POST["descricao"]);
		$servico->setPreco($_POST["preco"]);

		
		if($servicoDao->inserir_servico($servico))
			echo(
				"<script>
					alert('Serviço cadastrado com sucesso');
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
		
		echo "<META HTTP-EQUIV=Refresh CONTENT=\"0; URL=http://localhost:8080/APS/App/cadastroServico.php\">";
	
	}




?>