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
        // Obtem os dados do usuário.
        $id = $row['id'];
        $nome = $row['nome'];
        $email = $row['email'];
        $telefone = $row['telefone'];

        // Cria a sessão do usuário com os dados que veio do banco de dados;
        $_SESSION["usuario"] = array(
            "id" => $id,
            "nome" => $nome,
            "email" => $email,
            "telefone" => $telefone
        );
    }

    // Assim que é feito o login, é carregado do banco a lista dos médicos.
    $query2 = "SELECT * FROM medico";
    $result2 = $conn->query($query2);
    $_SESSION["medico"] = array();

    while ($row = $result2->fetch_assoc()) {
        $index = 0;
        // Cria a sessão dos médicos em um array, que armazena os dados de todos os médicos.
        $_SESSION["medico"][] = [
            "id" => $row['id'],
            "nome" => $row['nome']
        ];
        $index++;
    }
    header('Location: ../connections/chamaFormCadastro.php');

} else {
    // Login inválido, exibir mensagem de erro
    session_start();
    $_SESSION["error"] = true;
    header('Location: ../pages/login.php');
}

$conn->close();
?>