<!DOCTYPE html>
<html>
<head>
	<title>administrador</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
		<form action="../Controller/gerenciaProduto.php" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="op" value="cadastrarProduto">
			<p>Descricao : <input type="text" name="descricao"> </p>
			<p>Preço     : <input type="text" name="preco">     </p>
			<p>Imagem    : <input type="file" name="imagem" id="fileToUpload"></p>
			<input type="submit" value="Cadastrar" name="submit">
		</form>
	</div>
	
</body>
</html>