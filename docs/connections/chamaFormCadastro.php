<?php
// desfaz as sessões anteriores das mensagens e seta a sessão para o cadastro de consultas.
session_start();
unset($_SESSION["alteracao"]);
unset($_SESSION["formExclui"]);
unset($_SESSION["formAltera"]);
unset($_SESSION["sucessoAltera"]);
unset($_SESSION["sucessoExclui"]);
$_SESSION["formCadastro"] = true;
header("location: ../pages/home.php");