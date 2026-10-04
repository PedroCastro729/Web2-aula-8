<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de tarefas</title>
</head>
<body>
    <?php

    $arquivo = $_GET['nome'] . '.md';
    $tarefa = '. ' . $_GET['tarefa'] . "\n";

    if (is_writable($arquivo)) {
        $aberto = fopen($arquivo, 'a');
    } else {
        $aberto = fopen($arquivo, 'w');
    }

    fwrite($aberto, $tarefa);
    fclose($aberto);

    ?>
</body>
</html>
