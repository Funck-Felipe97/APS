<?php 
		
	$to = "jeands203@gmail.com";
	$subject = $_POST["assunto"];
	$txt = $_POST["comentario"];
	$headers = $_POST["email"];

	mail($to,$subject,$txt,$headers);

?>