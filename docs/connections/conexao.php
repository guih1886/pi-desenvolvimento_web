<?php
// Dados de conexão com o banco de dados
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'pi-desenvolvimento-web';

// Conectar ao banco de dados
$conn = new mysqli($hostname, $username, $password, $database);
if ($conn->connect_error) {
    die('Erro na conexão com o banco de dados: ' . $conn->connect_error);
}

// Obter dados do formulário
$email = $_POST['email'];
$senha = $_POST['senha'];

/// Consultar o banco de dados para verificar se o usuário existe
$query = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
$result = $conn->query($query);

// Verificar se o resultado da consulta retornou algum registro
if ($result->num_rows > 0) {
    // Login bem-sucedido, redirecionar para a página principal
    header('Location: home.php');
    session_start();
    $_SESSION["usuario"] = $result;

} else {
    // Login inválido, exibir mensagem de erro
    session_start();
    $_SESSION["error"] = true;
    header('Location: login.php');
}

// Fechar a conexão com o banco de dados
$conn->close();
?>