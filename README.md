# Teste Prático PHP/MySQL - CRUD de Produtos

Este projeto é um teste prático para avaliar conhecimentos em PHP e MySQL, envolvendo a criação de um sistema simples de login e um CRUD (Create, Read, Update, Delete) de produtos.

## Funcionalidades

* **Login:**  Página de login segura com proteção contra SQL Injection e armazenamento de senhas usando `password_hash()`.
* **CRUD de Produtos:**
    * **Cadastro:**  Formulário para cadastrar novos produtos.
    * **Listagem:**  Exibe a lista de produtos cadastrados.
    * **Edição:**  Permite editar as informações de um produto existente.
    * **Exclusão:**  Remove um produto do banco de dados.
* **Logout:**  Encerra a sessão do usuário.

## Tecnologias Utilizadas

* **PHP:** Linguagem de programação server-side.
* **MySQL:** Sistema de gerenciamento de banco de dados.
* **PDO (PHP Data Objects):**  Extensão PHP para acesso a bancos de dados.
* **HTML:** Linguagem de marcação para estruturação das páginas.
* **CSS:**  Linguagem de estilo para a apresentação visual.

## Instalação e Configuração

1. **Servidor Web:** Fois instalado um servidor web local com WAMP Server.
2. **Banco de Dados:**
    * Foi utilizado a ferramenta MySQL Workbench.
    * Criação de um banco de dados chamado `teste_php`.
    * Criação um usuário e senha para o banco de dados.
    * O script `sql/create_tables.sql` mostra quais foram as tabelas criadas.
3. **Configuração do Projeto:**
    * Copiar a pasta do projeto para o diretório raiz do seu servidor web (ex: `www` no WAMP Server).
    * Editar o arquivo `config/db.php` com as suas credenciais de banco de dados.
4. **Cadastro Inicial de Usuário:**
    * Inserir um usuário diretamente no banco de dados, usando `password_hash()` para armazenar a senha de forma segura.
    ```bash
    INSERT INTO Usuarios (usuario, senha) VALUES ('admin', 'hash da senha');
    ```
    * Criar um arquivo php temporário para gerar o hash da senha
    ```bash
    <?php
    $senha = 'senha123'; // A senha que você quer usar
    $hash = password_hash($senha, PASSWORD_DEFAULT);
    echo $hash; // Copie o hash gerado e cole na query SQL
    ?>
    ```
5. **Acesso ao Projeto:** Abra o navegador e acesse `http://localhost/projeto-php/public/` (ajuste o caminho se necessário).
