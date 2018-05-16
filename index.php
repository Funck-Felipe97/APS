<!DOCTYPE html>

<head>
  <title>Bootstrap Theme The Band</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="css/format.css">
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">



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
        <li><a href="#myCarousel">HOME</a></li>
        <li><a href="#equipe">EQUIPE</a></li>
        <li><a href="#produtos">PRODUTOS</a></li>
        <li><a href="#contato">CONTATO</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">AGENDAR
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="#">Agende Aqui</a></li>
          </ul>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="imagens/estilo.jpg" alt="New York">
      <div class="carousel-caption">
        <h3>Procurando um melhor estilo?</h3>
        <p>FJF faz isso por você.</p>
      </div> 
    </div>

    <div class="item">
      <img src="imagens/estilo2.jpg" alt="Chicago">
      <div class="carousel-caption">
        <h3>Quer o melhor atendimento?</h3>
        <p>Não pense muito - FJF é a melhor companhia de cortes de cabelos e barba.</p>
      </div> 
    </div>

    <div class="item">
      <img src="imagens/estilo3.jpg" alt="Los Angeles">
      <div class="carousel-caption">
        <h3>Com medo de mudar de estilo?</h3>
        <p>Faça a melhor escolha e com FJF saia detonando.</p>
      </div> 
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div id="equipe" class="container text-center">
  <h3>EQUIPE FJF</h3>
  <p><em>A melhor equipe de desenvolvimento</em></p>
  <p>Site desenvolvido para agendamento de horários.<br>
  	 Desenvolvido para o curso de web 2, sob orientação do professor mestre Anderson Brilhador<br>
  	 Desenvolvido para o curso de web 2, sob orientação do professor mestre Anderson Brilhador<br>
  	 Desenvolvido para o curso de web 2, sob orientação do professor mestre Anderson Brilhador<br>
  	 Desenvolvido para o curso de web 2, sob orientação do professor mestre Anderson Brilhador<br>
  	 Desenvolvido para o curso de web 2, sob orientação do professor mestre Anderson Brilhador<br>
  	 Desenvolvido para o curso de web 2, sob orientação do professor mestre Anderson Brilhador<br>
  	 Desenvolvido para o curso de web 2, sob orientação do professor mestre Anderson Brilhador<br>
  	 Desenvolvido para o curso de web 2, sob orientação do professor mestre Anderson Brilhador<br>
  	 Desenvolvido para o curso de web 2, sob orientação do professor mestre Anderson Brilhador<br>
  </p>
  <br>
<div class="row">

  <div class="col-sm-4">
    <p class="text-center"><strong>Felipe Nazário</strong></p><br>
    <a href="#demo" data-toggle="collapse">
      <img src="imagens/Felipe.jpg" class="img-circle person" alt="Nazario">
    </a>
    <div id="demo" class="collapse">
      <p>Graduando em ciências da computação</p>
      
      
    </div>
  </div>
  <div class="col-sm-4">
    <p class="text-center"><strong>Jean da Silva</strong></p><br>
    <a href="#demo2" data-toggle="collapse">
      <img src="imagens/Jean.jpg" class="img-circle person" alt="Silva">
    </a>
    <div id="demo2" class="collapse">
      <p>Graduando em ciências da computação</p>
      
    </div>
  </div>
  <div class="col-sm-4">
    <p class="text-center"><strong>Felipe Funck</strong></p><br>
    <a href="#demo3" data-toggle="collapse">
      <img src="imagens/Felipe2.jpg" class="img-circle person" alt="Funck">
    </a>
    <div id="demo3" class="collapse">
      <p>Graduando em ciências da computação</p>
      
    </div>
  </div>
</div>
</div>
<div id="produtos" class="row text-center">
	<h3>PRODUTOS</h3>
  <div class="col-sm-4">
    <div class="thumbnail">
      <img src="imagens/estilo.jpg" alt="Paris">
      <p><strong>Paris</strong></p>
      <p>Fri. 27 November 2015</p>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="thumbnail">
      <img src="imagens/estilo.jpg" alt="New York">
      <p><strong>New York</strong></p>
      <p>Sat. 28 November 2015</p>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="thumbnail">
      <img src="imagens/estilo.jpg" alt="San Francisco">
      <p><strong>San Francisco</strong></p>
      <p>Sun. 29 November 2015</p>
    </div>
  </div>
</div>
<div id="contato" class="container">
  <h3 class="text-center">Contato</h3>
  <p class="text-center"><em>Fale Conosco</em></p>
  <div class="row test">
    <div class="col-md-4">
      <p>Envie uma mensagem.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Santa Helena-PR, Brasil</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: (045) 9999-9999</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Nome" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comentario" rows="5"></textarea>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Enviar</button>
        </div>
      </div> 
    </div>
  </div>
</div>


</body>
</html>