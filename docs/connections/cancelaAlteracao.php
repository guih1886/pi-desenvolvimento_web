<?php
// desfaz as sessões anteriores das mensagens e direciona para listagem de consultas.
session_start();
unset($_SESSION["sucessoAltera"]);
unset($_SESSION["sucessoCadastro"]);
unset($_SESSION["sucessoExclui"]);
header("location: ../connections/chamaFormAltera.php");