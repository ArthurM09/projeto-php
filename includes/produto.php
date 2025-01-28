<?php
require_once('db.php');
require_once('functions.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = sanitize($_POST['nome']);
    $descricao = sanitize($_POST['descricao']);
    $preco = sanitize($_POST['preco']);


    if(isset($_POST['id']) && !empty($_POST['id'])) { // Edição
        $id = sanitize($_POST['id']);
        $stmt = $pdo->prepare("UPDATE Produtos SET nome = :nome, descricao = :descricao, preco = :preco WHERE id = :id");
        $stmt->bindParam(':id', $id);

    } else { // Cadastro
        $stmt = $pdo->prepare("INSERT INTO Produtos (nome, descricao, preco) VALUES (:nome, :descricao, :preco)");
    }

    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':descricao', $descricao);
    $stmt->bindParam(':preco', $preco);


    if ($stmt->execute()) {
        header('Location: ../public/index.php'); // Redireciona após o cadastro/edição
        exit();
    } else {
        $error = "Erro ao processar a solicitação.";
    }
}
?>
