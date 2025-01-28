<?php

/*
Lógica de autenticação do usuário.
Verifica as credenciais fornecidas e inicia a sessão se o login for bem-sucedido.
*/

session_start();
require_once('db.php');
require_once('functions.php'); 

// Verifica se o formulário de login foi enviado.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = sanitize($_POST['usuario']);
    $senha = $_POST['senha']; // Recebe a senha do formulário

    // Prepara a query SQL para selecionar o usuário com o nome de usuário fornecido.
    $stmt = $pdo->prepare("SELECT * FROM Usuarios WHERE usuario = :usuario");
    $stmt->bindParam(':usuario', $usuario);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC); // Busca o usuário do banco de dados.

    // Verifica se o usuário existe e se a senha fornecida é a armazenada no banco de dados
    if ($user && password_verify($senha, $user['senha'])) {
        $_SESSION['user_id'] = $user['id'];
        header('Location: ../public/index.php'); // Redireciona o usuário para a página principal.
        exit();
    } else {
        $error = "Usuário ou senha inválidos.";
    }
}
?>
