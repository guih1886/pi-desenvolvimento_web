<form action="../connections/atualizaConsulta.php" method="post" class="form-signup">
    <input type="text" name="id" value="Id consulta: <?= $_SESSION['consulta'][0]["id"] ?>" disabled>
    <input type="text" name="nome" value="Seu nome: <?= $_SESSION['usuario']["nome"] ?>" disabled>
    <input type="datetime-local" name="data" step="3600" value="<?= $_SESSION['consulta'][0]["data"] ?>" />
    <select name="medico">
        <?php
        foreach ($_SESSION["medico"] as $medico) {
            echo '<option name="' . $medico["id"] . '" value="' . $medico["id"] . '"';
            if ($medico["id"] == $_SESSION['consulta'][0]["idMedico"]) {
                echo ' selected';
            }
            echo '>' . $medico['nome'] . '</option>';
        }
        ?>
    </select>
    <button type="submit">Alterar</button>
    <a class="cancel" href="../connections/cancelaAlteracao.php" style="color:red; border: 2px solid red">Cancelar</a>
    <p class="informacao">Máximo de 10 consultas por paciente.</p>
</form>