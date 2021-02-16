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
        $queryResult = $pdo->prepare("select count(*) as videos from video where estado='activo'");
        $queryResult->execute([]);
        $result = $queryResult->fetch(PDO::FETCH_ASSOC);
        ?>
        <tr>
            <td>Videos</td>
            <td class="text-center"><?php echo $result['videos']; ?></td>
        </tr>
        <?php
        $queryResult = $pdo->prepare("select count(*) as videos_inter from video v join usuario u on v.id_usuario = u.id_usuario where v.estado='activo' and u.organizacion='interno'");
        $queryResult->execute([]);
        $result = $queryResult->fetch(PDO::FETCH_ASSOC);
        ?>
        <tr>
            <td>Videos internos</td>
            <td class="text-center"><?php echo $result['videos_inter']; ?></td>
        </tr>
        <?php
        $queryResult = $pdo->prepare("select count(*) as videos_ext from video v join usuario u on v.id_usuario = u.id_usuario where v.estado='activo' and u.organizacion='externo'");
        $queryResult->execute([]);
        $result = $queryResult->fetch(PDO::FETCH_ASSOC);
        ?>
        <tr>
            <td>Videos externos</td>
            <td class="text-center"><?php echo $result['videos_ext']; ?></td>
        </tr>
    </tbody>
</table>
<table id="usuarios" class="table table-striped table-bordered">
    <thead>
        <tr class="table-primary">
            <th>Concepto</th>
            <th class="text-center">Total</th>
            <th class="text-center">Porcentaje</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $queryResult = $pdo->prepare("select count(*) as total from video v join usuario u on v.id_usuario = u.id_usuario where v.estado='activo' and u.organizacion='externo'");
        $queryResult->execute([]);
        $total = $queryResult->fetch(PDO::FETCH_ASSOC);
        for ($i = 1; $i <= 3; $i++) {
            $queryConsult = $pdo->prepare("select count(*) as videos_t from video v join usuario u on v.id_usuario = u.id_usuario where v.estado='activo' and v.nro_video=:nro_video and u.organizacion='externo'");
            $queryConsult->execute([
                'nro_video' => $i
            ]);
            $consulta = $queryConsult->fetch(PDO::FETCH_ASSOC);
        ?>
            <tr>
                <td>Video <?php echo $i; ?></td>
                <td class="text-center"><?php echo $consulta['videos_t']; ?></td>
                <td class="text-center">
                    <?php
                    $por = ($consulta['videos_t'] * 100) / $total['total'];
                    echo round($por, 2) . ' %';
                    ?>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<h4 class="text-center mt-3">Registros</h4>
<table id="" class="table table-striped table-bordered">
    <tr class="table-primary">
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Mensaje</td>
        <td>Ubicacion</td>
    </tr>
    <?php
    $queryResult = $pdo->prepare("select v.ubicacion as ubicacion, v.mensaje as mensaje, u.nombre as nombre, u.apellido as apellido from video v join usuario u on v.id_usuario = u.id_usuario where v.estado='activo' and u.estado='activo' and u.organizacion='externo'");
    $queryResult->execute([]);
    while ($video = $queryResult->fetch(PDO::FETCH_ASSOC)) {
    ?>
        <tr>
            <td><?php echo $video['nombre']; ?></td>
            <td><?php echo $video['apellido']; ?></td>
            <td><?php echo $video['mensaje']; ?></td>
            <td><?php echo $video['ubicacion']; ?></td>
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