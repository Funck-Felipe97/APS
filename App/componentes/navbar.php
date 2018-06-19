<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">FJF</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php#myCarousel">HOME</a></li>
        <li><a href="index.php#equipe">EQUIPE</a></li>
        <li><a href="produtos.php#produtos">PRODUTOS</a></li>
        <li><a href="index.php#contato">CONTATO</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">AGENDAR
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">

            <li><a href="agendar.php">Agende Aqui</a></li> <!-- faltando teste de login !-->
            <?php 
              if(isset($_SESSION["user"])){
                session_destroy();
                ?><li><a href="index.php">Sair</a></li>    
              <?php }else{
                ?><li><a href="login.php">Login</a></li>    <?php
              }


             ?>
            
          </ul>
        </li>
        
      </ul>
    </div>
  </div>
</nav>