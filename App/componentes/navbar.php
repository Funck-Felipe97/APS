<?php 
  
  
?>

<?php 
  if (isset($_GET["deslog"])) {
    session_destroy();
    header("Location:index.php");
  }

 ?>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">FJF</a>
      <?php 
        if(isset($_SESSION["user"])){?>
          <a class="navbar-brand drop" href="editarCliente.php"><?php echo ($_SESSION["user"]); ?></a>

        <?php } ?>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">

        <?php 
          if (isset($_SESSION["user"]) && $_SESSION["user"] == "admin") {
            ?>    
            <li><a href="admin.php">ADMINISTRAR</a></li>
        <?php  }
        ?>
        
        


        <li><a href="index.php#myCarousel">HOME</a></li>
        <li><a href="index.php#equipe">EQUIPE</a></li>
        <li><a href="produtos.php#produtos">PRODUTOS</a></li>
        <li><a href="index.php#contato">CONTATO</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">CLIENTE
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">

            <li><a href="agendar.php" style="background-color: gray;">Agende Aqui</a></li> 
            <?php 
              if(isset($_SESSION["user"])){
                ?><li><a href="?deslog" style="background-color: gray;">Sair</a></li>    
              <?php }else{
                ?><li><a href="login.php" style="background-color: gray;">Login</a></li>    <?php
              }


             ?>
            
          </ul>
        </li>
        
      </ul>
    </div>
  </div>
</nav>