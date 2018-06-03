
<div id="produtos" class="row text-center">
  <br><br>
  <h3>PRODUTOS</h3>

  <?php 
      include "../Controller/gerenciaProduto.php";
      $produtos = listar_produtos_todos();

      if(count($produtos) > 2)
        for ($i=0; $i < 3; $i++) { 
          $aux = $produtos[$i]->getImagem();
          $img = "data:image;base64,".base64_encode($aux->getConteudo());

  ?>


  <div class="col-sm-4">
    <div class="thumbnail">
      <img src="<?php echo($img); ?>" alt="Paris">
      <p><strong><?php echo($produtos[$i]->getPreco()); ?></strong></p>
      <p><?php echo($produtos[$i]->getDescricao()); ?></p>
    </div>
  </div>
  
<?php }; ?>

</div>