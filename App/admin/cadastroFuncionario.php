<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/format.css">
<link rel="stylesheet" type="text/css" href="../css/format_login.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

<?php 
  include "../componentes/navbar.php";
  include "../../Model/VO/servico.php";  
  include "../../Model/Dao/ServicoDao.php";
  
  $servDao = new ServicoDao();
  $servicos = $servDao->listar_servicos_todos();
?>


<form style="max-width: 500px; margin: 50px auto;" method="POST" action="../../Controller/gerenciaFuncionario.php">

  <input type="hidden" name="op" value="cadastrarFuncionario">

	<label for="exampleFormControlInput1" style="margin-left: 65px;"><h1>Cadastro de Funcionarios</h1></label>
  	<div class="card card-container" style="width: 100%; height: 95%">
  		<div class="form-row">

        <div class="form-group col-md-6">      	
          <label for="entrarNome">Nome</label>
          <input type="text" class="form-control" placeholder="Nome" name="nome" required="">
        </div>

        <div class="form-group col-md-6">
          <label for="entrarCPF">CPF</label>
          <input type="text" class="form-control" placeholder="000.000.000-00" name="cpf" required="">
        </div>

        <div class="form-group col-md-6">
          <label for="entrarCargo">Cargo</label>
          <select class="form-control" id="entrarCargo" name="cargo">
            <option value="Administrador">Administrador</option>
            <option value="Funcionario">Funcionario</option>
          </select>
        </div>

        <div class="form-group col-md-6">
          <label for="entrarServico">Serviços</label>
          <select type="select" class="selectpicker" multiple name="servicos">
            <?php foreach ($servicos as $servico) { ?>
               <option> <?php echo($servico->getDescricao()); ?> </option> 
            <?php }; ?>
          </select>
        </div>

        </div>

        <div class="form-group col-md-6">
          <label for="entrarUser">Usuario</label>
          <input type="text" class="form-control" name="user" required="" id="entrarUser">
        </div>

        <div class="form-group col-md-6">
          <label for="entrarSenha">Senha</label>
          <input type="text" class="form-control" name="senha" required="" id="entrarSenha">
        </div>

        <div class="form-group col-md-6">
          <label for="entrarData">Data de Nascimento</label>
          <input type="date" class="form-control" name="data" required="">
        </div>

        <div class="form-group col-md-12">
          <label for="entrarEmail">Email</label>
          <input type="email" class="form-control" placeholder="email@exemplo.com.br" name="email" required="">
        </div>

        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="entrarTelefone">Telefone</label>
            <input type="text" class="form-control" name="telefone" required="">
        </div>

        <div class="form-group col-md-4">
          <label for="entrarCidade">Cidade</label>
          <input type="text" class="form-control" name="cidade" required="">   
        </div>

        <div class="form-group col-md-4">
          <label for="entrarBairro">Bairro</label>
          <input type="text" class="form-control" name="bairro" required="">
        </div>

        <div class="form-group col-md-12">
          <label for="entrarRua">Rua</label>
          <input type="text" class="form-control" name="rua" required="">
        </div>      
    </div>
    <button type="submit" class="btn btn-primary" style="float: right;">Próximo</button>
  	</div>
    
</form>