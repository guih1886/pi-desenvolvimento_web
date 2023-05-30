<?php
include("conexao.php");
session_start();
// Obter dados do formulário
$idConsulta = $_SESSION['consulta'][0]["id"];
$idUsuario = $_SESSION['usuario']["id"];
$data = $_POST['data'];
$idMedico = $_POST['medico'];

// executa o update com os dados novos que veio do formulário de alteração.
$consulta = "UPDATE `consulta` SET `id`='$idConsulta',`data`='$data',`idUsuario`='$idUsuario',`idMedico`='$idMedico' WHERE id = $idConsulta";
$resultConsultas = $conn->query($consulta);

// seta a mensagem de sucesso e direciona para a lista de consultas.
$_SESSION["sucessoAltera"] = true;
header('Location: ../connections/chamaFormAltera.php');

$conn->close();
?>