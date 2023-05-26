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
?>