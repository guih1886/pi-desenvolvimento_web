<?php
session_start();
unset($_SESSION["formCadastro"]);
unset($_SESSION["formExclui"]);
$_SESSION["formAltera"]=true;
header("location: ../pages/home.php");
