<div class="formConsultas">
    <?php
    if (empty($_SESSION["consulta"])) {
        echo "<h1>Sem consultas agendadas!</h1>";
    } else {
        include("formConsultas.php");
    }
    ?>
</div>