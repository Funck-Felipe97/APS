<!DOCTYPE html>
<html>
<head>
	<title>administrador</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="css/format.css">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">


	<!-- incluindo navbar.php (Menu) -->
    <?php include "componentes/navbar.php" ?>


    <div class="container">
  		<br><br><br>
			<div class="col-md-4">
				<ul class="nav nav-pills nav-stacked">
	    		<li class="active"><a href="#">Funções Administradoras</a></li>

				<li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Open Modal</button></li>
				

			
			<div id="myModal" class="modal fade" role="dialog">
			  <div class="modal-dialog">

			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title">Modal Header</h4>
			      </div>
			      <div class="modal-body">
			        <p>Teste botão</p>
			        <?php include "cadastro.php" ?>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      </div>
			    </div>

			  </div>
			</div>   
	  	
	  		
	    		<li><a href="#" class="btn btn-primary">Cadastrar Funcionários</a></li>
	    		<li><a href="cadastroProduto.php" class="btn btn-primary">Cadastrar Imagens</a></li>
	    		<li><a href="#" class="btn btn-primary">Verificar Agendamentos</a></li>    
  			</ul>
	  	</div>
	</div>



</body>
</html>
	
</body>
</html>