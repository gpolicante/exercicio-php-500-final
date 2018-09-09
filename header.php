<?php

session_start();

$config = parse_ini_file('config.ini');

$title = $config['title'] . $title;

$sqlite = new SQLite3($config['sqlite']);
$topicos = $sqlite->query('SELECT id, titulo, categoria FROM topicos');

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
            <h1><?=$title?></h1>
            <?php if(isset($_SESSION['auth'])): ?>
            <span><a href="logoff.php">SAIR</a></span>
            <?php else:?>
            <span><a href="login.php">ENTRAR</a></span>
            <?php endif; ?>
        </header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <?php while($rs = $topicos->fetchArray(SQLITE3_ASSOC)): ?>
                <li><a href="topico.php?id=<?=$rs['id']?>"><?=$rs['titulo']?></a></li>
                <?php endwhile; ?>
            </ul>
        </nav>
