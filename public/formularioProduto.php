<?php

// Formulário para cadastro e edição de produtos.

session_start();
require_once('../includes/db.php');
require_once('../includes/produto.php'); 

// Lógica para edição (preenche o formulário com os dados do produto)
if (isset($_GET['id'])) {
    $stmt = $pdo->prepare("SELECT * FROM Produtos WHERE id = :id");
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->execute();
    $produto = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?= isset($produto) ? 'Editar Produto' : 'Novo Produto' ?></title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
    <div class="container">
        <h1><?= isset($produto) ? 'Editar Produto' : 'Novo Produto' ?></h1>

        <?php if (isset($error)): ?>
            <p class="error"><?= $error ?></p>
        <?php endif; ?>

        <form method="post">
            <input type="hidden" name="id" value="<?= isset($produto) ? $produto['id'] : '' ?>">

            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="<?= isset($produto) ? $produto['nome'] : '' ?>" required>

            <label for="descricao">Descrição:</label>
            <textarea name="descricao" id="descricao"><?= isset($produto) ? $produto['descricao'] : '' ?></textarea>

            <label for="preco">Preço:</label>
            <input type="number" name="preco" id="preco" step="0.01" value="<?= isset($produto) ? $produto['preco'] : '' ?>" required>

            <input type="submit" value="<?= isset($produto) ? 'Salvar' : 'Cadastrar' ?>">
        </form>
    </div>
</body>
</html>
