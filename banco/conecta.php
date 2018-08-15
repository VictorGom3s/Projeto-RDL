<?php
/* Conecta com o Banco de Dados */
$conexao = mysqli_connect("127.0.0.1:3306", "root", "", "alunos_reservadelab");

/*Exibe mensagem em caso de falha de conexão */
if (!$conexao) {
    echo "Não foi possivel conectar-se ao banco de dados!";
    echo "Debugging Error: ". mysqli_connect_error();
}