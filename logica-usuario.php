<?php
include("banco/conecta.php");
session_start();

/*Cria uma sessão de usuario*/
function login($nome){
    $_SESSION["user"] = $nome;
}

/*Função para mostrar alertas de sucesso e erro */
function mostraAlerta($msg){ 
    if (isset($_SESSION[$msg])) { ?>
        <p class="text-center alert-<?=$msg?>"><?= $_SESSION[$msg]?></p>        
   <?php }
    unset($_SESSION[$msg]);
}

/*Destroi a sessão atual e inicia uma nova */
function logout(){
    session_destroy();
    session_start();
}