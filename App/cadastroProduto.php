<!DOCTYPE html>

<head>
  <title>Cadastro de produtos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- necessario para a utilização do bootstrap css e js -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- css extra -->
  <link rel="stylesheet" type="text/css" href="css/format.css">

  <!-- arquivos para o input de imagens -->
  <link rel="stylesheet" type="text/css" href="css/inputFile.css">
  <script type="text/javascript" src="js/inputFile.js"></script>

</head>

<!-- incluindo scroll da pagina para locais especificos -->
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

    <!-- incluindo navbar.php (Menu) -->
    <?php include "componentes/navbar.php" ?>
    
   
    <div  id="cadastro" class="container" style="height: 100%; margin-top: 5em; margin-bottom: 12em;">

    <div class="col-md-7">
      
        <form action="../Controller/gerenciaProduto.php" method="POST" enctype="multipart/form-data">
        <h1 style="margin-bottom: 2em; margin-top: 3em;">Cadastro de produtos</h1>
        <input type="hidden" name="op" value="cadastrarProduto">

        <div class="form-group">
         <label for="desc">Descrição</label>
         <input type="text" class="form-control" id="desc" name="descricao" required="" >
      </div>

      <div class="form-group">
         <label for="preco">Preço</label>
         <input type="text" class="form-control" id="preco" name="preco" required="" placeholder="R$ 0,00">
      </div>

      <label for="imagem">Imagem</label>
      <div class="form-group">
        <label class="customFileInput clearfix">
            <div class="button">Escolher um arquivo</div>
            <div class="fileName"></div>
            <input type="file" name="imagem" onchange="showFileName(this)" required="">
          </label>
      </div>

      <input type="submit" value="Cadastrar" class="btn btn-primary">
  
    </form>
    <br>
    <a href="admin.php" class="btn btn-primary">Voltar</a>
    </div>

	   </div>

    

  </body>
</html>

