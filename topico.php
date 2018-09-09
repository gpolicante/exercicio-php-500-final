<?php

require 'main.php';

$res = $sqlite->query('SELECT id, titulo, categoria, texto, data FROM topicos WHERE id = ' . (int) $_GET['id']);
$topico = $res->fetchArray(SQLITE3_ASSOC);
$topico_data = date('d/m/Y', $topico['data']);
$title = " - {$topico['titulo']}";

require 'header.php';

?>
<main>
    <h2><?=$topico['titulo']?></h2>
    <h3><?=$topico['categoria']?></h3>
    <?=$topico['texto']?>
    <span><?=$topico_data?></span>
</main>
<?php require 'footer.php'; ?>
