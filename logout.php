<?php
require_once("header.php");

/* Realiza o logout e redireciona para pagina de login ao mesmo tempo
que exibe uma mensagem de sucesso */
logout();
$_SESSION["success"] = "Usuário deslogado com sucesso!";
header("Location: index.php");
die();

?>