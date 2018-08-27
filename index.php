<?php
require_once("banco/conecta.php");
require_once("logica-usuario.php");
?>


<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />

    <div class="container">
        <img src="imagens/logo.png" class="img-fluid rounded mx-auto d-block" id="logo">    
    </div>
    <div class="container col-4 small">
        <?php
        /*Chama alertas de erro e sucesso caso houver*/
        mostraAlerta("success");
        mostraAlerta("danger");
        ?>
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
        <div class="alert alert-info" role="alert">
            <div class="row">
                <p class="">
                    Login: teste <br>
                    Senha: 123456 <br>
                </p>
            </div>
        </div>    
    </div>
<?php require_once("footer.php"); ?>

