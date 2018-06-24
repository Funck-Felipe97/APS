<?php 
  session_start();
?>
<!DOCTYPE html>

<head>
  <title>FJF horarios</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- necessario para a utilização do bootstrap css e js -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- css extra -->
  <link rel="stylesheet" type="text/css" href="css/format.css">
</head>

<!-- incluindo scroll da pagina para locais especificos -->
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

    
    <!-- incluindo navbar.php (Menu) -->
    <?php include "componentes/navbar.php"; ?>
    <!-- incluindo carousel.php (imagens e slides das mesmas) -->
    <?php include "componentes/carousel.php"; ?>
    <!-- incluindo equipe.php (pagina da equipe) -->
    <?php include "componentes/equipe.php"; ?>
    <!-- incluindo produto.php (pagina que mostra os produtos) -->
    <?php include "componentes/produto.php"; ?>
    <!-- incluindo contato.php (pagina para envio de mensagens) -->
    <?php include "componentes/contato.php"; ?>

  </body>
  
  <!--AQUI É O FOOTER -->
  <footer>
      
      <div class="row row-cinza-claro">
        
        <div class="container">
          
          <div class="row">
            
            <div class="col-md-2 text-center">

            </div>
            <div class="col-md-10">
              
              <div class="row row-cols">
                <div class="col-md-4 col-popular-post">

                  <ul class="list-unstyled text-left">
                    <h4>MENU</h4>

                  <ul class="list-unstyled">
                    <li><a href="http://localhost/APS/App/index.php"><i class="fas glyphicon glyphicon-menu-right"></i>Home</a></li>
                    <li><a href="http://localhost/APS/App/index.php#equipe"><i class="fas glyphicon glyphicon-menu-right"></i>Equipe</a></li>
                    <li><a href="http://localhost/APS/App/produtos.php#produtos"><i class="fas glyphicon glyphicon-menu-right"></i>Produtos</a></li>
                    <li><a href="http://localhost/APS/App/index.php#contato"><i class="fas glyphicon glyphicon-menu-right"></i>Contato</a></li>
                  </ul>

                </div>
                <div class="col-md-4 col-get-in-touch text-left">
                  
                  <h4>SIGAM-NOS NAS REDES SOCIAIS</h4>

                  <address>
                    <i class="fa fa-map-marker"> Santa Helena-PR</i>
                  </address>
                  <ul class="list-unstyled list-socials">
                    <li>
                      <a href="http://www.facebook.com.br" target="_blank"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="http://www.twitter.com.br" target="_blank"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="http://www.instagram.com" target="_blank"><i class="fa fa-instagram"></i></a>
                    </li>
                  </ul>

                </div>
              </div>

            </div>

          </div>

        </div>

      </div>
    <div class="row row-cinza-escuro">     
        <div class="container">
          <p class="pull-left"><center>Copyright © FJF. All rights reserved.</center></p>
        </div>
      </div>

  </footer>

</html>