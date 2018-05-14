<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/formato_cadastro.css">
</head>
<body>

	<div id="geral">
		
		<form method="POST">
			<div class="form-group" >
				<label for="exampleFormControlInput1"><h1>Cadastro de Usuários</h1></label><br>
			    <label for="exampleFormControlInput1">Nome</label>
			    <input type="text" class="form-control" id="exampleFormControlInput1">
			  	<br>
			    <label for="exampleFormControlInput1">CPF</label>
			    <input type="text" class="form-control" id="exampleFormControlInput1">
			  	<br>
			    <label for="exampleFormControlInput1">Data de Nascimento</label>
			    <input type="date" class="form-control" id="exampleFormControlInput1">
			  	<br>
			    <label for="exampleFormControlInput1">Email</label>
			    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
			  	<br>
			    <label for="exampleFormControlInput1">Telefone</label>
			    <input type="text" class="form-control" id="exampleFormControlInput1">
			  	<br>
			    <label for="exampleFormControlInput1">Cidade</label>
			    <input type="text" class="form-control" id="exampleFormControlInput1">
			 	<br>
			    <label for="exampleFormControlInput1">Bairro</label>
			    <input type="text" class="form-control" id="exampleFormControlInput1">
			  	<br>
			    <label for="exampleFormControlInput1">Rua</label>
			    <input type="text" class="form-control" id="exampleFormControlInput1">
			  	<br>
			    <label for="exampleFormControlInput1">Nome de Usuario</label>
			    <input type="text" class="form-control" id="exampleFormControlInput1">
			  	<br>
			    <label for="exampleFormControlInput1">Senha</label>
			    <input type="password" class="form-control" id="exampleFormControlInput1">
			  	<br>
			    <label for="exampleFormControlInput1">Repetir Senha</label>
			    <input type="password" class="form-control" id="exampleFormControlInput1"><br>
			    <button type="submit" class="btn btn-primary">Submit</button>
		  	</div>

  <?php include("bootstrapform.php"); ?>
</form>




	</div>
</body>
</html>


