<form action="../connections/cadastraConsulta.php" method="post" class="form-signup">
    <?php
    $currentDateTime = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
    $currentDateTimeFormatted = $currentDateTime->format('Y-m-d H:00');
    ?>
    <input type="text" name="id" value="Seu id: <?= $_SESSION['usuario']["id"] ?>" disabled>
    <input type="text" name="nome" value="Seu nome: <?= $_SESSION['usuario']["nome"] ?>" disabled>
    <input type="datetime-local" name="data" step="3600" value="<?= $currentDateTimeFormatted; ?>" />
    <select name="medico">
        <?php
        foreach ($_SESSION["medico"] as $medico) {
            echo '<option name=' . $medico["id"] . ' value=' . $medico["id"] . '>' . $medico['nome'] . '</option>';
        }
        ?>
    </select>
    <?php if (isset($_SESSION["sucessoCadastro"])) {
        include "../messages/sucessoCadastro.php";
    } elseif (isset($_SESSION["consultasCheias"])) {
        include "../messages/erroConsultasCheias.php";
    } else {
        echo '<button type="submit">Cadastrar</button>';
    } ?>
    <?php
    unset($_SESSION["sucessoCadastro"]);
    unset($_SESSION["consultasCheias"]);
    ?>
    <p class="informacao">*Os horários são agendados somente de hora em hora. <br> Máximo de 10 consultas por paciente.</p>
</form>