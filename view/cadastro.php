<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/format.css">
<link rel="stylesheet" type="text/css" href="../css/format_login.css">
<?php include "navbar.php"; ?>


<form style="max-width: 500px; margin: 50px;" method="POST" action="cadastroUser.php">
	<label for="exampleFormControlInput1"><h1>Cadastro de Usuários</h1></label>
  	<div class="card card-container" style="width: 100%; height: 70%">
  		<div class="form-row">
      <div class="form-group col-md-6">      	
        <label for="entrarNome">Nome</label>
        <input type="email" class="form-control" placeholder="Nome" name="nome">
      </div>
      <div class="form-group col-md-6">
        <label for="entrarCPF">CPF</label>
        <input type="text" class="form-control" placeholder="000.000.000-00">
      </div>
    </div>
    <div class="form-group col-md-6">
      <label for="entrarData">Data de Nascimento</label>
      <input type="date" class="form-control">
    </div>
    <div class="form-group col-md-12">
      <label for="entrarEmail">Email</label>
      <input type="email" class="form-control" placeholder="email@exemplo.com.br">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="entrarTelefone">Telefone</label>
        <input type="text" class="form-control">
      </div>
      <div class="form-group col-md-4">
        <label for="entrarCidade">Cidade</label>
        <input type="text" class="form-control" name="cidade">
        
      </div>
      <div class="form-group col-md-2">
        <label for="entrarBairro">Bairro</label>
        <input type="text" class="form-control">
      </div>
      <div class="form-group col-md-12">
        <label for="entrarRua">Rua</label>
        <input type="text" class="form-control">
      </div>      
    </div>
    <button type="submit" class="btn btn-primary" style="float: right;" hidden="cadastroUser.php">Próximo</button>
  	</div>
    

</form>



