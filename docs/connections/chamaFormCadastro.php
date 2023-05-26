<?php
session_start();
unset($_SESSION["formExclui"]);
unset($_SESSION["formAltera"]);
$_SESSION["formCadastro"]=true;
header("location: ../pages/home.php");
