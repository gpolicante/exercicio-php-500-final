<?php

# iniciar a sessão

# ler arquivo de configuração

$title = $config['title'] . $title;

#$sqlite = new SQLite3($config['sqlite']); Descomentar quando o arquivo config.ini for carregado na variável $config
$topicos = $sqlite->query('SELECIONAR OS CAMPOS id, titulo, categoria DA TABELA DE topicos');

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title><?=$title?></title>
        <link href="css/style.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <header>
            <h1># REPETIR O TÍTULO AQUI #</h1>
            <!-- Fazer um IF no PHP para mostrar SAIR se estiver logado -->
            <!-- <span><a href="logoff.php">SAIR</a></span> -->
            <!-- Caso contrário exibir ENTRAR -->
            <!-- <span><a href="login.php">ENTRAR</a></span> -->
        </header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li> <!-- Este é fixo, não mexer -->
                <li><a href="topico.php?id=ID"># NOME TOPICO #</a></li> <!-- Remover -->
                <li><a href="topico.php?id=ID"># NOME TOPICO #</a></li> <!-- Remover -->
                <!-- Fazer um WHILE percorrando os valores da variável $topico -->
                <!-- <li><a href="topico.php?id=ID"># NOME TOPICO #</a></li> -->
            </ul>
        </nav>
