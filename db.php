<?php
$host = 'localhost';
$db = 'loja';
$user = 'root';
$pass = ''; // coloque a senha certa aqui, ou deixe vazio

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
} else {
    echo "Conectado com sucesso!";
}
?>