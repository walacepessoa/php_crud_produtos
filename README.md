PHP - CRUD MYSQL + GitHub
-------------------------
📌 Projeto: php_crud_produtos<br/>
Descrição:<br/>
Este projeto é um sistema CRUD simples para gerenciamento de produtos, desenvolvido em PHP utilizando a extensão MySQLi para interação com banco de dados MySQL/MariaDB. A aplicação permite a criação, leitura, atualização e exclusão de produtos com campos como nome, preço e descrição, através de uma interface web básica. O foco do projeto é demonstrar a integração entre PHP e banco relacional, manipulação segura de dados com Prepared Statements, além do uso do servidor web embutido do PHP para desenvolvimento local.
<p>
🚀 Tecnologias utilizadas<br/>

- PHP 8.x — linguagem de programação do backend<br/>
- MySQL / MariaDB — sistema gerenciador de banco de dados relacional<br/>
- MySQLi (Extensão PHP) — extensão para conexão e operações com MySQL/MariaDB usando PHP orientado a objetos<br/>
- HTML5 / CSS3 — para a estrutura e estilo das páginas web<br/>
- Servidor Web embutido do PHP — para desenvolvimento local e testes<br/>
- VSCode — ambiente de desenvolvimento integrado (IDE)<br/>
</p>
<p>
✅ Instalação <br/>
Instale o PHP (versão 8.x) e configure o PHP no PATH do sistema.<br/>
Instale o MySQL ou MariaDB e configure usuário, senha e banco de dados (exemplo: banco loja).<br/>

✅ Clone o repositório:<br/>

git clone https://github.com/SEU_USUARIO/php_crud_produtos.git<br/>
cd php_crud_produtos<br/>
Configure a conexão com banco no arquivo db.php, atualizando as variáveis de conexão conforme seu ambiente:<br/>

<?php
$host = 'localhost';<br/>
$db = 'loja';       // nome do banco de dados<br/>
$user = 'root';     // usuário do banco<br/>
$pass = '';         // senha do banco<br/>
<br/>
$conn = new mysqli($host, $user, $pass, $db);<br/>

if ($conn->connect_error) {<br/>
    die("Erro na conexão: " . $conn->connect_error);<br/>
}<br/>
?><br/>

Crie a tabela produtos no seu banco MySQL (caso ainda não tenha), exemplo:<br/>

CREATE TABLE produtos (<br/>
    id INT AUTO_INCREMENT PRIMARY KEY,<br/>
    nome VARCHAR(255) NOT NULL,<br/>
    preco DECIMAL(10,2) NOT NULL<br/>
);<br/>

✅ Configuração<br/>
Verifique se as extensões PHP mysqli estão ativadas no seu php.ini.<br/>
Ajuste o arquivo db.php conforme seu banco e credenciais.<br/>
Caso queira usar outro banco (SQLite, por exemplo), adapte o código.<br/>

✅ Execução<br/>
Abra o terminal na pasta do projeto:<br/>
php -S localhost:8000<br/>
Acesse no navegador:<br/>

http://localhost:8000/index.php<br/>
Use a interface para adicionar e listar produtos.<br/>
</p>

<p>
📁 Estrutura do Projeto<br/>

php_crud_produtos/<br/>
├── index.php               # Página que lista os produtos<br/>
├── info.php                # Página que informa sobre o projeto<br/>
├── inserir.php             # Formulário e lógica para adicionar produtos<br/>
├── db.php                  # Conexão com o banco de dados<br/>
├── MariaDBLocalsession.sql # Script para criar a tabela de produtos no MariaDB<br/>
├── README.md               # Documentação (opcional)<br/>
├── config/                 # Pasta para arquivos de configuração<br/>
├── public/                 # Pasta para arquivos públicos (se necessário)<br/>
└── vscode/                 # Pasta settings (se usar)<br/>
</p>

### Criado por:<br/>
Walace Pessôa<br/>
Rio de Janeiro, Brasil<br/>
V01.01.00
