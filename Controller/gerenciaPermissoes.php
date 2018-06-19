<?php 


	function verificarPermissao($tipoUsuario){

		if($tipoUsuario == "cliente"){
			if(!isset($_SESSION["user"])){
				header('Location:../App/cadastro.php');
			}
		}
		if($tipoUsuario == "funcionario"){
			if(!isset($_SESSION["user"])){
				header('Location:../App/permissaoNegada.php?falha');
			}
			if(get_class($_SESSION["user"]) != "Funcionario"){
				header('Location:../App/permissaoNegada.php?falha');
			}
		}
		if($tipoUsuario == "admin"){
			if(!isset($_SESSION["user"])){
				header('Location:../App/permissaoNegada.php?falha');
			}
			if(get_class($_SESSION["user"]) != "Funcionario"){
				header('Location:../App/permissaoNegada.php?falha');
			}
			$cargo = $_SESSION["user"]->getCargo();
			if($cargo->getDescricao() != "Administrador"){
				header('Location:../App/permissaoNegada.php?falha');
			}
		}
	}


 ?>