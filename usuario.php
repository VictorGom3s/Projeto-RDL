<?php
include("banco/conecta.php");
session_start();

function logaUsuario($nome){
    $_SESSION["user"] = $nome;
}

function mostraAlerta($msg){ 
    if (isset($_SESSION[$msg])) { ?>
        <p class="alert-<?=$msg?>"><?= $_SESSION[$msg] ?></p>        
   <?php }
}