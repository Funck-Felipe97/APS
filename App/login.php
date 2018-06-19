<?php
    session_start();
    if(isset($_SESSION["user"])){
        
        header("Location:index.php");
    }

 ?>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/format_login.css">
    <link rel="stylesheet" type="text/css" href="css/format.css">
    <?php include "componentes/navbar.php" ?>

    <div class="container">
        
    <div id="log" class="container">
        <div id="log2" class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="imagens/teste.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" name="form_login" method="POST" action="../Controller/gerenciaCliente.php">
                <input type="hidden" name="op" value="login">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" name="nome" class="form-control" placeholder="Nome" required autofocus>
                <input type="text" name="senha" class="form-control" placeholder="Senha" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Lembre-se de mim
                    </label>
                </div>
                <input type="submit" name="entrar" class="btn btn-lg btn-primary btn-block btn-signin" value="Entrar">
                
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Esqueceu a senha?
            </a><br>
            <a href="cadastro.php" class="cadastre-se">
                Cadastre-se
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->

</div>
