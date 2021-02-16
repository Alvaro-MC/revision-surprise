<h4 class="text-center">Información</h4>
<table id="usuarios" class="table table-striped table-bordered">
    <thead>
        <tr class="table-primary">
            <th>Concepto</th>
            <th class="text-center">Total</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $queryResult = $pdo->prepare("select count(*) as total from video v join usuario u on v.id_usuario = u.id_usuario where v.estado='activo' and u.estado='activo' and u.organizacion='externo'");
        $queryResult->execute([]);
        $total = $queryResult->fetch(PDO::FETCH_ASSOC);
        ?>
        <tr>
            <td>Videos totales</td>
            <td class="text-center"><?php echo $total['total']; ?></td>
        </tr>
    </tbody>
</table>
<table id="" class="table table-striped table-bordered">
    <tr class="table-primary">
        <td>ID</td>
        <td>Nombre</td>
        <td>Ubicacion</td>
        <td>Cantidad</td>
        <td>Porcentaje</td>
    </tr>
    <?php
    $queryResult = $pdo->prepare("select * from panel order by id_panel asc");
    $queryResult->execute([]);
    while ($panel = $queryResult->fetch(PDO::FETCH_ASSOC)) {
        $queryConsult = $pdo->prepare("select count(*) as cantidad from video v join usuario u on v.id_usuario = u.id_usuario where v.id_panel = :id_panel and v.estado='activo' and u.estado='activo' and u.organizacion='externo'");
        $queryConsult->execute([
            'id_panel' => $panel['id_panel']
        ]);
        $consulta = $queryConsult->fetch(PDO::FETCH_ASSOC);
    ?>
        <tr>
            <td class="text-center"><?php echo $panel['id_panel']; ?></td>
            <td><?php echo $panel['nombre']; ?></td>
            <td><?php echo $panel['ubicacion']; ?></td>
            <td class="text-center"><?php echo $consulta['cantidad']; ?></td>
            <td class="text-center"><?php
                $por = ($consulta['cantidad']*100)/$total['total'];
                echo round($por,2).' %';
            ?></td>
        </tr>
    <?php
    }
    ?>
</table>

<!--
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-end">
        <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
    </ul>
</nav>
-->