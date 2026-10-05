<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "site";

    $conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

    $n= $_GET['nome'];
    $e = $_GET['email'];
    $s = $_GET['senha'];
    $comando = "INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES (NULL, '$n', '$e', '$s')";

    $linhas = $conexao->exec($comando);

    if($linhas > 0)
        {
            echo "Dados salvos!";
        } else {
            echo "Erro ao salvar os dados!";
        }

        $conexao = NULL;
?>