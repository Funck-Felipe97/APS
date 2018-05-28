<?php 
 	
	include "../Model/Dao/banco.php";

 	//var_dump($_FILES["imagem"]);
 	//$conteudo = file_get_contents($_FILES["imagem"]["tmp_name"]);

 	/*

		$sql = "INSERT INTO tb_imagem(img_descricao , img_nome , img_tamanho , img_imagem) VALUES (? , ? , ? , ?)";
	 	$stmt = $pdo->prepare($sql);
	 	$stmt->execute(array(
	 			"lalalla" , 
	 			$_FILES["imagem"]["name"],
	 			$_FILES["imagem"]["size"],
	 			$conteudo
	 		));


 	*/

 	$pdo = getConnection();

 	
 	$sql = "SELECT * FROM tb_imagem WHERE img_id = 1";
 	$stmt = $pdo->prepare($sql);
 	$stmt->execute(array());
 	$resul = $stmt->fetchAll()[0];
 	


?>

<img src="data:image;base64,<?= base64_encode($resul[4]) ?>" />