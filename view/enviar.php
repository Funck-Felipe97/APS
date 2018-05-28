<?php 
 	
 	if(isset($_POST['submit'])){

 		if(getimagesize($_FILES['imagem']['tmp_name'])==false){
 			
 		}else{
 			$image = addslashes($_FILES['imagem']['tmp_name']);
 			$name = addslashes($_FILES['imagem']['name']);
 			$image = file_get_contents($image);
 			$image = base64_encode($image);
 			Salvar($name, $image);
 		}

 	}
 	function Salvar($name,$image){

 		$PDO = new PDO("mysql:host=localhost;dbname=aps_db","root","");
 		$sql = "INSERT INTO tb_imagem (img_nome,img_imagem) VALUES (?, ?)";
 		$stmt = $PDO->prepare($sql);
 		$stmt->execute(array($name,$image));
 		

 	}
	

?>