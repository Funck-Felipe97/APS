<!DOCTYPE html>

<head>
  <title>FJF horarios</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- necessario para a utilização do bootstrap css e js -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- css extra -->
  <link rel="stylesheet" type="text/css" href="css/format.css">
</head>

<!-- incluindo scroll da pagina para locais especificos -->
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

    
    <!-- incluindo navbar.php (Menu) -->
    <?php include "componentes/navbar.php" ?>
    <!-- incluindo carousel.php (imagens e slides das mesmas) -->
    <?php include "componentes/carousel.php" ?>
    <!-- incluindo equipe.php (pagina da equipe) -->
    <?php include "componentes/equipe.php" ?>
    <!-- incluindo produto.php (pagina que mostra os produtos) -->
    
    <!-- incluindo contato.php (pagina para envio de mensagens) -->
    <?php include "componentes/contato.php" ?>


  </body>
</html>