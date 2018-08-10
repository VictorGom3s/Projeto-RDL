<?php
include("banco/conecta.php");
session_start();

function login($nome){
    $_SESSION["user"] = $nome;
}

function mostraAlerta($msg){ 
    if (isset($_SESSION[$msg])) { ?>
        <p class="text-center alert-<?=$msg?>"><?= $_SESSION[$msg]?></p>        
   <?php }
    unset($_SESSION[$msg]);
}

function logout(){
    session_destroy();
    session_start();
}