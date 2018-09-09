<?php

# incluir main.php

# verificar se a sessão existe, se não existir, redirecionar e terminar execução
if(isset('SESSAO?')) {
	# header ou head? 'Location: admin.php'
	# quit ou exit?
}

# verificar se o botão "entrar" foi "apertado
# pegar "email" e md5() da "senha"
# procurar no banco de dados com -> WHERE email = '$email' AND senha = '$senha'"
# se registro existir, criar uma sessão contendo o id e o email do usuário em forma de array
# e redirecionar para admin.php

# Procurar no google: php sqlite3 query, singleQuery

print_r($_POST);

$title = ' - Login'; # Este título complementa o de header.php
# incluir header.php

?>
<main>
    <h2>Login</h2>
    <?php if('USUARIO ERROU EMAIL OU SENHA'): ?>
    <div class="error">Usuário ou senha inválidos</div>
    <?php endif; ?>
    <form method="post" action="login.php">
        <table>
            <tr>
                <td>Login: </td><td><input type="text" name="email" placeholder="E-mail" value="<?=$email ?? ''?>" /></td>
            </tr>
            <tr>
                <td>Senha: </td><td><input type="password" name="senha" placeholder="Senha" /></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="entrar" value="Entrar" /></td>
            </tr>
        </table>
    </form>
</main>
<!-- incluir footer.php -->
