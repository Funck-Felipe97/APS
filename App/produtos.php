<!DOCTYPE html>

<head>
  <title>Produtos</title>
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
    <?php include "componentes/navbar.php"; ?>
    <!-- incluindo carousel.php (imagens e slides das mesmas) -->
    <?php include "componentes/carousel.php"; ?>
   
    <div id="produtos" class="row text-center">
      <br><br>
      <h3>Produtos</h3>

      <?php 
        include "../Controller/gerenciaProduto.php";
        $produtos = listar_produtos_todos();

        foreach ($produtos as $produto){
          $aux = $produto->getImagem();
          $img = "data:image;base64,".base64_encode($aux->getConteudo());
      ?>

      <div class="col-sm-4" id="divProduto1">
        <div class="thumbnail" id="divProduto2">
          <img src="<?php echo($img); ?>" alt="Paris" id="imagem" class="img-rounded">
          <p><strong><?php echo($produto->getPreco()); ?></strong></p>
          <p><?php echo($produto->getDescricao()); ?></p>
        </div>
      </div>
    
      <?php }; ?>

    </div>

    <!-- incluindo contato.php (pagina para envio de mensagens) -->
    <?php include "componentes/contato.php" ?>

  </body>
</html>