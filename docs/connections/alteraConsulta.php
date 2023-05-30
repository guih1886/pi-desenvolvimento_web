<?php
// desfaz as sessões anteriores das mensagens.
session_start();
unset($_SESSION["formCadastro"]);
unset($_SESSION["formExclui"]);
unset($_SESSION["formAltera"]);
unset($_SESSION["consulta"]);

include("conexao.php");
$idConsulta = $_GET['id'];

// seleciona a consulta selecionada do formulário, pegando o id da consulta e procurando no banco.
$consultas = "SELECT c.id, c.data, c.idUsuario, c.idMedico, m.nome AS nomeMedico FROM consulta c
JOIN medico m ON c.idMedico = m.id WHERE c.id = $idConsulta";
$result = $conn->query($consultas);

// seta os dados da consulta na sessão de consulta, e direciona para o formulário para atualizar
while ($row = $result->fetch_assoc()) {
    $_SESSION["consulta"][] = [
        "id" => $row['id'],
        "data" => $row['data'],
        "idUsuario" => $row['idUsuario'],
        "idMedico" => $row['idMedico'],
        "nomeMedico" => $row['nomeMedico']
    ];
}

$_SESSION["alteracao"] = true;
header("location: ../pages/home.php");
$conn->close();