<?php
require_once("banco/conecta.php");
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
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a class="nav-link" href="form-reservas.php">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="listaReservas.php">Reservas</a></li>
                <li class="nav-item"><a class="nav-link" href="contato.php">Contato</a></li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
            </form>                    
        </div>
    </nav>