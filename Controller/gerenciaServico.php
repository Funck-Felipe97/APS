<?php  

    include "../../Model/VO/servico.php";
	include "../../Model/Dao/ServicoDao.php";

	$servicoDao = new ServicoDao();
	$servicos = $servicoDao->listar_servicos_todos();

 ?>