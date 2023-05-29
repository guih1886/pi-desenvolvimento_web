<table class="tabela-consultas">
    <thead>
        <tr>
            <th>Data</th>
            <th>ID Médico</th>
            <th>Acões</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($_SESSION["consulta"] as $consulta) { ?>
            <tr class="linha-consultas">
                <td>
                    <?php echo $consulta["data"]; ?>
                </td>
                <td>
                    <?php echo $consulta["nomeMedico"]; ?>
                </td>
                <td>
                    <a href="../connections/alteraConsulta.php?id=<?= $consulta["id"]; ?>
                ">Editar</a>
                    </td>
                </tr>
        <?php } ?>
    </tbody>
</table>