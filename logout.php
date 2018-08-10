<?php
require_once("header.php");

logout();
$_SESSION["success"] = "Usuário deslogado com sucesso!";
header("Location: index.php");
die();

?>