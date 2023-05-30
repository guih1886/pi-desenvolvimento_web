<?php
include("conexao.php");

session_start();
unset($_SESSION["alteracao"]);
unset($_SESSION["formCadastro"]);
unset($_SESSION["formExclui"]);

//carrega todas as consultas ativas do usuário e seta na sessão
$idUsuario = $_SESSION['usuario']["id"];
$query = "SELECT c.id, c.data, c.idUsuario, c.idMedico, m.nome AS nomeMedico FROM consulta c
JOIN medico m ON c.idMedico = m.id WHERE c.idUsuario = $idUsuario order by c.id";
$result = $conn->query($query);
$_SESSION["consultas"] = array();

while ($row = $result->fetch_assoc()) { 
    $index = 0;
    // incluindo as consultas no array da sessão de consultas
    $_SESSION["consultas"][] = [
        "id" => $row['id'],
        "data" => $row['data'],
        "idUsuario" => $row['idUsuario'],
        "idMedico" => $row['idMedico'],
        "nomeMedico" => $row['nomeMedico']
    ];
    $index++;
}
$_SESSION["formAltera"] = true;
header("location: ../pages/home.php");