<?php

require 'main.php';

if(isset($_SESSION['auth'])) {
	header('Location: admin.php');
	exit;
}

$error = false;
if(isset($_POST['entrar'])) {
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);
	$rs = $sqlite->querySingle("SELECT id FROM usuarios WHERE email = '$email' AND senha = '$senha'", true);
	if($rs) {
		$_SESSION['auth'] = ['id' => $rs['id'], 'email' => $email];
		header('Location: admin.php');
		exit;
	}
	$error = true;
}

$title = ' - Login';
require 'header.php';

?>
<main>
    <h2>Login</h2>
    <?php if($error): ?>
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
<?php require 'footer.php'; ?>
