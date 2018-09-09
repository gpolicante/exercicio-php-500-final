<?php

# incluir main.php

$res = $sqlite->query('SELECIONAR id, titulo, categoria, texto, data DA TABELA DE TOPICOS ONDE O ID FOR IGUAL AO DA URL');
$topico = $res->fetchArray(SQLITE3_ASSOC);
$topico_data = $topico['data']; # Tentar converter o timestamp para o formato d/m/Y
$title = " - {$topico['titulo']}"; # Este título complementa o do header.php

# incluir header.php

?>
<main>
    <h2># TITULO #</h2>
    <h3># CATEGORIA #</h3>
    <?='# TEXTO #'?>
    <span><?=$topico_data?></span>
</main>
<!-- incluir footer.php -->
