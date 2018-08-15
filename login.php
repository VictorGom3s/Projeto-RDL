<?php
require_once("banco/conecta.php");
require_once("logica-usuario.php");

/*Pegando as variaveis do form */
$user = $_POST["user"];     
$password = $_POST["password"];

/* escapando string para evitar SQLInjection */
$user = mysqli_real_escape_string($conexao, $user);     
$password = mysqli_real_escape_string($conexao, $password);

/* convertendo a senha para md5 */
$senhaMd5 = md5($password); 

/*fazendo autenticação no BD*/
$query = "SELECT * FROM tb_login WHERE login = '{$user}' AND senha ='{$senhaMd5}'";
$resultado = mysqli_query($conexao, $query);        
$usuario = mysqli_fetch_assoc($resultado);

/*fazendo a autenticação*/
if($usuario == TRUE){
    login($user); 
    header("Location: form-reservas.php");
}else{
    /*mostrando msg de erro caso necessario */
    $_SESSION["danger"] = "Usuário ou senha incorretos!";
    header("Location: index.php");  
}