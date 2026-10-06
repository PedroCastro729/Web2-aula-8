<?php
session_start();
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "ex3";

$conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

$comando = "SELECT `nome`, `email` FROM `dados`";

$stm = $conexao->prepare($comando);
$stm->execute();

while($resultado = $stm->fetch(PDO::FETCH_ASSOC)) {
    echo $resultado['nome'] . " " . $resultado['email'] . "<br>";

    if($resultado['nome'] != NULL && $resultado['email'] != NULL)
        {
            $_SESSION['nome'] = $resultado['nome'];
            echo "Sessão salva";
        } else {
            echo "Erro ao procurar os dados!";
        }
}

$conexao = null;
?>
