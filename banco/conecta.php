<?php
$conexao = mysqli_connect("127.0.0.1", "root", "", "alunos_reservadelab");

if (!$conexao) {
    echo "Não foi possivel conectar-se ao banco de dados!";
    echo "Debugging Error: ". mysqli_connect_error();
}