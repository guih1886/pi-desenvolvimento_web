<?php
// Desfaz a sessão do usuario e a destrói em seguida. Redireciona para a página de login.
unset($_SESSION["usuario"]);
session_destroy();
header("location: ../pages/login.php");