<?php

// Script para excluir um produto do banco de dados.

session_start();
require_once('../includes/db.php');

// Verifica se o ID do produto foi fornecido na URL.
if (isset($_GET['id'])) {

    // Prepara a query SQL para excluir o produto com o ID especificado.
    $stmt = $pdo->prepare("DELETE FROM Produtos WHERE id = :id");
    $stmt->bindParam(':id', $_GET['id']);

    if ($stmt->execute()) {
        header('Location: index.php'); // Redireciona para a página principal após a exclusão.
        exit();
    } else {
        echo "Erro ao excluir o produto.";
    }
}
?>
