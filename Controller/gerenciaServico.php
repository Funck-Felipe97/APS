<?php  
	
    include "../../Model/VO/servico.php";
	include "../../Model/Dao/ServicoDao.php";

	$servicoDao = new ServicoDao();
    $servicos = $servicoDao->listar_servicos_todos();

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
		echo ("cadastrando serviço");
	}

 ?>