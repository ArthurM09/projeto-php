# Teste Prático PHP/MySQL - CRUD de Produtos

Este projeto é um teste prático para avaliar conhecimentos em PHP e MySQL, envolvendo a criação de um sistema simples de login e um CRUD (Create, Read, Update, Delete) de produtos.

## Objetivo

O objetivo deste teste é demonstrar habilidades em:

* Instalação e configuração de PHP e MySQL.
* Criação de tabelas e conexão com o banco de dados usando PHP (PDO).
* Desenvolvimento de uma página de login segura.
* Implementação de um CRUD básico para cadastro de produtos.

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

1. **Servidor Web:** Instale um servidor web local como XAMPP, WAMP ou MAMP.
2. **Banco de Dados:**
    * Inicie o MySQL.
    * Crie um banco de dados chamado `teste_php` (ou altere o nome no arquivo `config/database.php`).
    * Crie um usuário e senha para o banco de dados.
    * Importe o script `sql/create_tables.sql` para criar as tabelas.
3. **Configuração do Projeto:**
    * Copie a pasta do projeto para o diretório raiz do seu servidor web (ex: `htdocs` no XAMPP).
    * Edite o arquivo `config/database.php` com as suas credenciais de banco de dados.
4. **Cadastro Inicial de Usuário:**
    * Insira um usuário diretamente no banco de dados (através do phpMyAdmin ou linha de comando), usando `password_hash()` para armazenar a senha de forma segura.  Veja as instruções detalhadas no arquivo `README.md` (este arquivo).
5. **Acesso ao Projeto:** Abra o navegador e acesse `http://localhost/teste-php-mysql/public/` (ajuste o caminho se necessário).

## Estrutura de Arquivos
teste-php-mysql/
├── config/
│ └── database.php
├── includes/
│ ├── functions.php
│ ├── login.php
│ ├── product.php
│ └── database.php
├── public/
│ ├── index.php
│ ├── login.php
│ ├── product_form.php
│ ├── logout.php
│ ├── delete_product.php
│ └── style.css
└── sql/
└── create_tables.sql

## Segurança

* Senhas armazenadas com `password_hash()`.
* Prepared statements (PDO) para prevenir SQL Injection.
* Sanitização de entradas de usuário.
* Controle de acesso com sessões.
