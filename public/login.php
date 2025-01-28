<?php
require_once('../includes/login.php'); // Inclui a lógica de login
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>

        <form method="post">
            <label for="usuario">Usuário:</label>
            <input type="text" name="usuario" id="usuario" required><br>

            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" required><br>

            <?php if (isset($error)): ?>
                <p class="error"><?= $error ?></p>
            <?php endif; ?>

            <input type="submit" value="Entrar">
        </form>
    </div>
</body>
</html>
