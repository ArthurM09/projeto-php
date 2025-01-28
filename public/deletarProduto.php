<?php
session_start();
require_once('../includes/db.php');

if (isset($_GET['id'])) {
    $stmt = $pdo->prepare("DELETE FROM Produtos WHERE id = :id");
    $stmt->bindParam(':id', $_GET['id']);

    if ($stmt->execute()) {
        header('Location: index.php');
        exit();
    } else {
        echo "Erro ao excluir o produto.";
    }
}
?>
