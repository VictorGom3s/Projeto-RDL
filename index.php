<?php
require_once("banco/conecta.php");
require_once("usuario.php");

mostraAlerta("success");
mostraAlerta("danger");
?>

    <div class="container">
        <img src="imagens/logo.png" class="img-fluid rounded mx-auto d-block" id="logo">    
    </div>
    <div class="container col-3">
        <form action="login.php" method="post">
            <div class="form-group">            
                <input type="text" class="form-control" placeholder="Usuário" name="user">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Senha" name="password">
            </div>            
            <input type="submit" class="btn btn-primary btn-block" value="Entrar"></input>
            <button class="btn btn-link btn-block btn-sm" value="Recuperar Senha">Recuperar Senha </button>
        </form>
    </div>    
    <?php include("footer.html"); ?>
