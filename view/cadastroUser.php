<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/format.css">
<link rel="stylesheet" type="text/css" href="../css/format_login.css">
<?php include "navbar.php"; ?>


<form style="max-width: 500px; margin: 50px;">
	<label for="exampleFormControlInput1"><h1>Cadastro de Usuários</h1></label>
  	<div class="card card-container" style="width: 100%; height: 45%">
  		<div class="form-row">
          	
        <label for="entrarUsuario">Nome de Usuário</label>
        <input type="email" class="form-control" placeholder="Usuário" name="user">     
      
        
      </div>
      <div class="form-row">
        <label for="entrarSenha">Senha</label>
        <input type="password" class="form-control">

        

      </div>
      <div class="form-row">
        <label for="entrarData">Repetir Senha</label>
        <input type="password" class="form-control">
      </div>

      <div class="form-row">
        <button type="submit" class="btn btn-primary" style="float: right; margin: 10px;">Cadastrar</button>  
      </div>
      
    </div>
    
    
  	
    
    

</form>



