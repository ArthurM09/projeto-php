<?php
session_start();
require_once('../includes/db.php');

// Verifica se o usuário está logado
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Busca os produtos do banco de dados
$stmt = $pdo->query("SELECT * FROM Produtos");
$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Produtos</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
    <div class="container">
        <h1>Produtos</h1>

        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produtos as $produto): ?>
                    <tr>
                        <td><?= $produto['nome'] ?></td>
                        <td><?= $produto['descricao'] ?></td>
                        <td><?= $produto['preco'] ?></td>
                        <td>
                            <a href="formularioProduto.php?id=<?= $produto['id'] ?>" class="editar">Editar</a> | 
                            <a href="deletarProduto.php?id=<?= $produto['id'] ?>" class="excluir" onclick="return confirm('Tem certeza que deseja excluir este produto?')">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="button-container">
            <a href="formularioProduto.php" class="novo-produto">Novo Produto</a>
            <a href="logout.php">Sair</a>
        </div>
    </div>
</body>
</html>
