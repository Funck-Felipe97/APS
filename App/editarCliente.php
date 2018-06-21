<?php 
  session_start();

  if (!isset($_SESSION["user"])) {
  	header("Location:index.php");
  }
?>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/format.css">
<link rel="stylesheet" type="text/css" href="css/format_login.css">
<?php include "componentes/navbar.php"; ?>


<form style="max-width: 500px; margin: 50px auto;" method="POST" action="cadastroUser.php">
	<label for="exampleFormControlInput1" style="margin-left: 65px;"><h1>EDITAR USUÁRIO</h1></label>
  	<div class="card card-container" style="width: 100%; height: 60%">
  	<label><h2>Dados Permitidos</h2></label>
  	
  	<div class="form-row">
      <div class="form-group col-md-6">      	
        <label for="entrarTel">Telefone</label>
        <input type="text" class="form-control" placeholder="Telefone" name="telefone" required="">
      </div>
      
    </div>

  	<div class="form-row">
      <div class="form-group col-md-12">      	
        <label for="entrarRua">Rua</label>
        <input type="text" class="form-control" placeholder="Rua" name="rua" required="">
      </div>
      
    </div>
    <div class="form-row">
    	<div class="form-group col-md-6">
       		<label for="entrarCidade">Cidade</label>
        	<input type="text" class="form-control" placeholder="Cidade" name="cidade" required="">
      	</div>
    	<div class="form-group col-md-6">
       		<label for="entrarBairro">Bairro</label>
        	<input type="text" class="form-control" placeholder="Bairro" name="bairro" required="">
      	</div>
    </div>
    
    <button type="submit" class="btn btn-primary" style="float: right;">Salvar</button>
  	</div>
    
</form>



