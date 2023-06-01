<table class="tabela-consultas">
    <thead>
        <tr>
            <th>ID</th>
            <th>Data</th>
            <th>Dentista</th>
            <th>Acões</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($_SESSION["consultas"] as $consulta) { ?>
            <tr class="linha-consultas">
                <td>
                    <?php echo $consulta["id"]; ?>
                </td>
                <td>
                    
                    <?php 
                    $dataFormatada = date("d/m/Y H:i", strtotime($consulta["data"]));
                    echo $dataFormatada;
                    ?>
                </td>
                <td>
                    <?php echo $consulta["nomeMedico"]; ?>
                </td>
                <td>
                    <a href="../connections/alteraConsulta.php?id=<?= $consulta["id"]; ?>
                        ">Editar</a>
                    <a href="../connections/excluiConsulta.php?id=<?= $consulta["id"]; ?>
                        ">Excluir</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>