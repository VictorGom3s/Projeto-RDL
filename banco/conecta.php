<?php
$conexao = mysqli_connect("localhost", "root", "", "banco_reservas");

if (!$conexao) {
    echo "Não foi possivel conectar-se ao banco de dados!";
    echo "Debugging Error: ". mysqli_connect_error();
}