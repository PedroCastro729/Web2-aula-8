<?php
session_start();
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "ex3";

$conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

if($_SESSION['nome'] != NULL)
    {
        echo "" . $_SESSION['nome'];
    } else {
        echo "Acesse a página de login";
    }

$conexao = null;
?>