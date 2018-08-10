<?php
require_once("banco/conecta.php");
require_once("usuario.php");

$user = $_POST["user"];     //Pegando as variaveis do form
$password = $_POST["password"];

$user = mysqli_real_escape_string($conexao, $user);     //escapando string para evitar SQLInjection
$password = mysqli_real_escape_string($conexao, $password);

$senhaMd5 = md5($password); //convertendo a senha para md5

$query = "SELECT * FROM tb_login WHERE login = '{$user}' AND senha ='{$senhaMd5}'";
$resultado = mysqli_query($conexao, $query);        //fazendo autenticação no BD
$usuario = mysqli_fetch_assoc($resultado);

if($usuario == TRUE){
    login($user); //fazendo a autenticação
    header("Location: form-reservas.php");
}else{
    $_SESSION["danger"] = "Usuário ou senha incorretos!";
    header("Location: index.php");  //mostrando msg de erro caso necessario
    unset($_SESSION["danger"]);
}