
<div id="contato" class="container">
  <form method="POST" action="../Controller/gerenciaContato.php">
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
          <input class="form-control" id="email" name="email" placeholder="E-mail" type="email" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="assunto" name="assunto" placeholder="Assunto" type="text" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comentario" placeholder="Comentario" rows="5"></textarea>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Enviar</button>
        </div>
      </div> 
    </div>
  </div>
  </form>
</div>