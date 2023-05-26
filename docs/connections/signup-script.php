<?php
// Dados de conexão com o banco de dados
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'pi-desenvolvimento-web';
$erro = false;

// Conectar ao banco de dados
$conn = new mysqli($hostname, $username, $password, $database);
if ($conn->connect_error) {
    die('Erro na conexão com o banco de dados: ' . $conn->connect_error);
}

// Obter dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];

/// Consultar o banco de dados para verificar se o usuário existe
$query = "SELECT * FROM usuario WHERE email = '$email'";
$result = $conn->query($query);

// Verificar se o resultado da consulta retornou algum registro
if ($result->num_rows > 0) {
    // E-mail foi encontrado, não cadastra no banco o novo usuário
    session_start();
    $_SESSION["errorEmail"] = true;
    header("location: signup.php");

} else {
    // E-mail não foi encontrado, cadastra no banco o novo usuário
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Verifica se os campos estão preenchidos
        if (empty($nome) || empty($email) || empty($senha) || empty($telefone)) {
            session_start();
            $_SESSION["error"] = true;
            header("location: signup.php");
        } else {
            $cadastra_usuario = "INSERT INTO usuario (nome, email, senha, telefone) VALUES('$nome', '$email', '$senha', '$telefone')";
            mysqli_query($conn, $cadastra_usuario);
            session_start();
            $_SESSION["sucessoSignup"] = true;
            header("location: login.php");
        }
    }
}
// Fechar a conexão com o banco de dados
$conn->close();
?>