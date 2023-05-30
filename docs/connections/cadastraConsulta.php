<?php
unset($_SESSION["sucessoCadastro"]);

include("conexao.php");
session_start();
// Obter dados do formulário
$idUsuario = $_SESSION['usuario']["id"];
$data = $_POST['data'];
$idMedico = $_POST['medico'];
// obtem as consultas do usuário
$consultas = "SELECT * from consulta where idUsuario = $idUsuario";
$resultConsultas = $conn->query($consultas);

// verificar se já tem 10 ou mais consultas cadastradas, se sim, não cadastrada e seta a mensagem de
// máximo permitido
if ($resultConsultas->num_rows >= 10) {
    $_SESSION["consultasCheias"] = true;
    header('Location: ../pages/home.php');
} else {
    // se não, inclui a nova consulta, seta a mesagem de sucesso e direciona para a listagem de consultas.
    $query = "INSERT INTO `consulta`(`data`, `idUsuario`, `idMedico`) VALUES ('$data',$idUsuario,$idMedico)";
    $result = $conn->query($query);
    $_SESSION["sucessoCadastro"] = true;
    header('Location: ../connections/chamaFormAltera.php');
}


$conn->close();
?>