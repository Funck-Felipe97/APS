<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/format.css">
<link rel="stylesheet" type="text/css" href="../css/format_login.css">

<script type="text/javascript">
function validarSenha(){

  var s1 = document.form.senha.value;
  var s2 = document.form.senha2.value;

  
      if (s1 == "" || s2 == "") {
      alert("preencha todos os campos!");
      return false;    
    }else{
      if(s1 == s2){
      return true;
      }else{
        alert("senhas não batem!");        
        return false;
      }
    }
} 
</script>

</head>
<body>
  <?php include "navbar.php"; ?>




<form style="max-width: 500px; margin: 50px auto;" method="POST" action="teste.php" name="form">
  <label for="exampleFormControlInput1" style="margin-left: 65px;"><h1>Cadastro de Usuários</h1></label>
    <div class="card card-container" style="width: 100%; height: 280px;">


      <input type="hidden" name="nome" value="<?php echo $_POST["nome"] ?>">
      <input type="hidden" name="cpf" value="<?php echo $_POST["cpf"] ?>">
      <input type="hidden" name="data" value="<?php echo $_POST["data"] ?>">
      <input type="hidden" name="email" value="<?php echo $_POST["email"] ?>">
      <input type="hidden" name="telefone" value="<?php echo $_POST["telefone"] ?>">
      <input type="hidden" name="cidade" value="<?php echo $_POST["cidade"] ?>">
      <input type="hidden" name="bairro" value="<?php echo $_POST["bairro"] ?>">
      <input type="hidden" name="rua" value="<?php echo $_POST["rua"] ?>">

      <div class="form-row">
        
        <label for="entrarUsuario">Nome de Usuário</label>
        <input type="text" class="form-control" placeholder="Usuário" name="user" required="">     
      
        
      </div>
      <div class="form-row">
        <label for="entrarSenha">Senha</label>
        <input type="password" class="form-control" placeholder="No mínimo 8 caracteres" name="senha" required="">

        

      </div>
      <div class="form-row">
        <label for="entrarData">Repetir Senha</label>
        <input type="password" class="form-control" placeholder="confirme a senha" name="senha2" required="">
      </div>
      

      <div class="form-row">
        <button  type="submit" class="btn btn-primary" style="float: right; margin: 10px;" onclick=" return validarSenha()">Cadastrar</button>  
      </div>
      
    </div>
    
    
    
    
    

</form>




</body>
</html>
