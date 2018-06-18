<?php 
	
	include_once "usuario.php";

	/**
	* @Funck
	*/
	class Cliente extends Usuario{
		
		function __construct($nome = null,$cpf = null,$data = null,$email = null , $numero = null ,$cidade = null,$bairro = null,$rua = null,$user = null,$senha = null){
			parent::__construct($nome,$cpf,$data,$email,$cidade,$bairro,$rua,$user,$senha);
		}
	}

 ?>