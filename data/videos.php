<table id="" class="table table-striped table-bordered">
    <tr class="table-primary">
        <td>ID</td>
        <td>Ubicacion</td>
        <td>Fecha</td>
        <td>Mensaje</td>
        <td>Panel</td>
        <td>Estado</td>
        <td>Herramientas</td>
    </tr>
    <?php
    $queryResult = $pdo->prepare("select * from video where estado='activo' order by id_video asc");
    $queryResult->execute([]);
    while ($video = $queryResult->fetch(PDO::FETCH_ASSOC)) {
    ?>
        <tr>
            <td><?php echo $video['id_video']; ?></td>
            <td><?php echo $video['ubicacion']; ?></td>
            <td><?php echo $video['fecha']; ?></td>
            <td><?php echo $video['mensaje']; ?></td>
            <td><?php echo $video['id_panel']; ?></td>
            <td><?php echo $video['estado']; ?></td>
            <td>
                <button class="btn btn-danger" onclick="removeVideo(<?php echo $video['id_video']; ?>)"><i class="fas fa-trash-alt"></i></button>
                <button class="btn btn-warning" disabled><i class="fas fa-edit"></i></button>
            </td>
        </tr>
    <?php
    }
    ?>
</table>

<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-end">
        <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
    </ul>
</nav>