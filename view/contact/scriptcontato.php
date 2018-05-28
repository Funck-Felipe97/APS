<?php 
		
	$to = "nazario@alunos.utfpr.edu.br";
	$subject = $_POST["assunto"];
	$txt = $_POST["comentario"];
	$headers = $_POST["email"];

	mail($to,$subject,$txt,$headers);

?>