<form action="#" method="post" class="form-signup">
    <?php
    /* session_start();
    if (isset($_SESSION["error"])) {
        include "../messages/erroCadastro.php";
        unset($_SESSION["error"]);
    } elseif (isset($_SESSION["errorEmail"])) {
        include "../messages/erroEmail.php";
        unset($_SESSION["errorEmail"]);
    } */
    ?>
    <input type="text" name="id" value="Seu id: <?= $_SESSION['usuario']["id"] ?>" disabled>
    <input type="text" name="nome" value="Seu nome: <?= $_SESSION['usuario']["nome"] ?>" disabled>
    <input type="datetime-local" name="data" step="3600" />
    <select name="medico">
        <?php
        foreach ($_SESSION["medico"] as $medico) {
            echo '<option value=' . $medico["id"] . '>' . $medico['nome'] . '</option>';
        }
        ?>
    </select>
    <button type="submit">Cadastrar</button>
    <p class="informacao">*Os horários são agendados somente de hora em hora.</p>
</form>