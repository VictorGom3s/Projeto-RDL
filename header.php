<?php
require_once("banco/conecta.php");
require_once("usuario.php");
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="pragma" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=3, shrink-to-fit=no">
    <title>Reserva de Laboratórios</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navprincipal">
        <div class="container">        
            <a class="navbar-brand" href="#">
                <img src="imagens/favicon.png" width="40" height="40" class="d-inline-block align-top" alt="">
                Labsis
            </a>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a class="nav-link" href="form-reservas.php">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="listaReservas.php">Reservas</a></li>
                <li class="nav-item"><a class="nav-link" href="contato.php">Contato</a></li>
            </ul>
        </div>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="logout.php">Sair</a></li>            
            </ul>        
    </nav>