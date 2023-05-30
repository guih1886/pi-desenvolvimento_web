<div class="formConsultas">
    <?php
    if (empty($_SESSION["consultas"])) {
        echo "<h1>Sem consultas agendadas!</h1>";
    } else {
        if (isset($_SESSION["sucessoAltera"])) {
            include "../messages/sucessoAltera.php";
        } elseif (isset($_SESSION["sucessoExclui"])) {
            include "../messages/sucessoExclui.php";
        } elseif (isset($_SESSION["sucessoCadastro"])) {
            include "../messages/sucessoCadastro.php";
        }
        include("Consultas.php");
    } ?>
</div>