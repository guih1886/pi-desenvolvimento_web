<?php
session_start();
unset($_SESSION["formCadastro"]);
unset($_SESSION["formAltera"]);
$_SESSION["formExclui"]=true;
header("location: ../pages/home.php");
