<?php

include("conexao.php");

// Obter dados do formulário
$email = $_POST['email'];
$senha = $_POST['senha'];

/// Consultar o banco de dados para verificar se o usuário existe
$query = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
$result = $conn->query($query);

// Verificar se o resultado da consulta retornou algum registro
if ($result->num_rows > 0) {
    // Login bem-sucedido, redirecionar para a página principal
    session_start();
    while ($row = $result->fetch_assoc()) {
        // Acessar os valores das colunas pelo nome
        $id = $row['id'];
        $nome = $row['nome'];
        $email = $row['email'];
        $telefone = $row['telefone'];

        // Fazer algo com os dados obtidos
        $_SESSION["usuario"] = array(
            "id" => $id,
            "nome" => $nome,
            "email" => $email,
            "telefone" => $telefone
        );
    }

    $query2 = "SELECT * FROM medico";
    $result2 = $conn->query($query2);
    $_SESSION["medico"] = array();

    while ($row = $result2->fetch_assoc()) {
        $index = 0;
        $_SESSION["medico"][] = [
            "id" => $row['id'],
            "nome" => $row['nome']
        ];
        $index++;
    }

    header('Location: ../pages/home.php');

} else {
    // Login inválido, exibir mensagem de erro
    session_start();
    $_SESSION["error"] = true;
    header('Location: ../pages/login.php');
}

$conn->close();
?>