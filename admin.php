<?php

# incluir main.php

# verificar se sessão existe, caso contrário redirecionar para login.php

# verificar se botão foi "pressionado"
# verificar se os campos enviados não são vazios e tratar os dados para evitar SQL INJECTION
# se quiser, criar um array para conter os erros, ver mais abaixo "ARRAY DE ERROS"

# Procurar em sites de busca por sqlite escapeString, mysqli real_escape_string

# Se os campos forem INVÁLIDOS, não cadastrar no banco, do contrário
# pegar a data atual em timestamp e gravar os dados no banco, redirecionando para admin.php logo após
# Procurar em sites de busca por php time

if(isset($_POST['entrar'])) {
    $errors = [];
}

$title = ' - Administrar'; # Este título complementa o de header.php
# incluir header.php

# Se existir uma variável na URL chamada "success", uma mensagem de sucesso já aparecerá em cima do formulário

# ARRAY DE ERROS
# Se os erros ficarem guardados no array $errors = ['titulo' => 'Obrigatório', 'categoria' => '', 'texto' => 'Obrigatório'];
# eles já aparecerão dentro das divs <div class="error"></div>

?>
<main>
    <h2>Cadastrar Tópico</h2>
    <?php if(isset($_GET['success'])): ?>
    <div class="success">Tópico cadastrado com sucesso</div>
    <?php endif; ?>
    <form method="post" action="admin.php">
        <table>
            <tr>
                <td>Titulo: </td>
                <td>
                    <input type="text" name="titulo" placeholder="Titulo" value="<?=$titulo ?? ''?>" />
                    <div class="error"><?=$errors['titulo'] ?? ''?></div>
                </td>
            </tr>
            <tr>
                <td>Categoria: </td>
                <td>
                    <input type="text" name="categoria" placeholder="Categoria" value="<?=$categoria ?? ''?>" />
                    <div class="error"><?=$errors['categoria'] ?? ''?></div>
                </td>
            </tr>
            <tr>
                <td>Texto: </td>
                <td>
                    <textarea name="texto" placeholder="Texto ou HTML" cols="60" rows="8"><?=$texto ?? ''?></textarea>
                    <div class="error"><?=$errors['texto'] ?? ''?></div>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="entrar" value="Entrar" /></td>
            </tr>
        </table>
    </form>
</main>
<!-- incluir footer.php -->
