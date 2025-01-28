<?php
session_start();
require_once('db.php');
require_once('functions.php'); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = sanitize($_POST['usuario']);
    $senha = $_POST['senha'];

    $stmt = $pdo->prepare("SELECT * FROM Usuarios WHERE usuario = :usuario");
    $stmt->bindParam(':usuario', $usuario);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($senha, $user['senha'])) {
        $_SESSION['user_id'] = $user['id'];
        header('Location: ../public/index.php');
        exit();
    } else {
        $error = "Usuário ou senha inválidos.";
    }
}
?>
