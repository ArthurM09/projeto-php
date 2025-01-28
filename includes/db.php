<?php
// Inclui o arquivo de configuração do banco de dados.
require_once('../config/db.php');

// Estabelece uma conexão com o banco de dados MySQL usando PDO.
try {
  $pdo = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
  // Faz o PDO lançar exceções em caso de erros
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  die("Erro na conexão: " . $e->getMessage());
}
?>
