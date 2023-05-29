<?php
unset($_SESSION["sucessoCadastro"]);

include("conexao.php");
session_start();
// Obter dados do formulário
$idUsuario = $_SESSION['usuario']["id"];
$data = $_POST['data'];
$idMedico = $_POST['medico'];

$consultas = "SELECT * from consulta where idUsuario = $idUsuario";
$resultConsultas = $conn->query($consultas);

/// Consultar o banco de dados para verificar se o usuário existe
if ($resultConsultas->num_rows >= 10) {
    $_SESSION["consultasCheias"] = true;
    header('Location: ../pages/home.php');
} else {
    $query = "INSERT INTO `consulta`(`data`, `idUsuario`, `idMedico`) VALUES ('$data',$idUsuario,$idMedico)";
    $result = $conn->query($query);
    $_SESSION["sucessoCadastro"] = true;
    header('Location: ../pages/home.php');
}


$conn->close();
?>  