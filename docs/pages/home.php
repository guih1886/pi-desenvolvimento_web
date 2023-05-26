<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/valva.png" type="image/x-icon">
    <link rel="stylesheet/less" type="text/css" href="../styles/homeStyle.less" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <title>Clínica Odontológica Valva</title>
</head>

<body>
    <header>
        <div class="menu">
            <img class="logo" src="../assets/valva.png" alt="Logo-Valva">
            <div class="menu__links">
                <a href="../connections/chamaFormCadastro.php">Agendar Consulta</a>
                <a href="../connections/chamaFormAltera.php" style="color:blue;border: 2px solid blue">Alterar
                    Consulta</a>
                <a href="../connections/chamaFormExclui.php" style="color:red; border: 2px solid red">Excluir
                    Consulta</a>
            </div>
            <div class="menu__logout">
                <a href="../connections/logout.php">Sair</a>
            </div>
        </div>
    </header>
    <div class="container">
        <?php
        //session_start();
        if (isset($_SESSION["formCadastro"])) {
            include "../components/formCadastro.php";
        }
        if (isset($_SESSION["formAltera"])) {
            include "../components/formAltera.php";
        }
        if (isset($_SESSION["formExclui"])) {
            include "../components/formExclui.php";
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/less"></script>
</body>

</html>