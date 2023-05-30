<?php
include("conexao.php");

// Obter dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmSenha = $_POST['confirmSenha'];
$telefone = $_POST['telefone'];

/// Consultar o banco de dados para verificar se o usuário existe
$query = "SELECT * FROM usuario WHERE email = '$email'";
$result = $conn->query($query);

// Verificar se o resultado da consulta retornou algum registro
if ($result->num_rows > 0) {
    // E-mail foi encontrado, não cadastra no banco o novo usuário
    session_start();
    $_SESSION["errorEmail"] = true;
    header("location: ../pages/signup.php");
} elseif ($senha != $confirmSenha) {
    // E-mail não foi encontrado, faz validações. Primeiro verifica a confirmação da senha.
    session_start();
    $_SESSION["senhaNaoConfere"] = true;
    header("location: ../pages/signup.php");
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se os campos estão preenchidos
    if (empty($nome) || empty($email) || empty($senha) || empty($telefone)) {
        session_start();
        $_SESSION["error"] = true;
        header("location: ../pages/signup.php");
    } else {
        // Passou nas validações, cadastra no banco o novo usuario.
        $cadastra_usuario = "INSERT INTO usuario (nome, email, senha, telefone) VALUES('$nome', '$email', '$senha', '$telefone')";
        mysqli_query($conn, $cadastra_usuario);
        session_start();
        $_SESSION["sucessoSignup"] = true;
        header("location: ../pages/login.php");
    }
}
$conn->close();
?>