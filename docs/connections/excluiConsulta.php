<?php
include("conexao.php");
session_start();
// Obtem o id da consulta que foi passada pelo parâmetro
$idConsulta = $_GET["id"];

// faz a exclusão do banco e seta a mensagem para exibição
$consulta = "DELETE FROM `consulta` WHERE id = $idConsulta";
$resultConsultas = $conn->query($consulta);
$_SESSION["sucessoExclui"] = true;
header('Location: ../connections/chamaFormAltera.php');

$conn->close();
?>