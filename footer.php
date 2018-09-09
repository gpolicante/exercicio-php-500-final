<?php

# No lugar de # DATA DE HOJE # tentar achar uma função no PHP que retorna o ano atual
$footer = str_replace('{ANO}', '# DATA DE HOJE #', $config['footer']);

?>
       <footer>
            <hr />
            <?=$footer?>
        </footer>
    </body>
</html>
