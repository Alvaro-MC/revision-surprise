<table id="" class="table table-striped table-bordered">
    <tr class="table-primary">
        <td>ID</td>
        <td>Nombre</td>
        <td>Ubicacion</td>
        <td>Stock</td>
        <td>Herramientas</td>
    </tr>
    <?php
    $queryResult = $pdo->prepare("select * from panel order by id_panel asc");
    $queryResult->execute([]);
    while ($panel = $queryResult->fetch(PDO::FETCH_ASSOC)) {
    ?>
        <tr>
            <td><?php echo $panel['id_panel']; ?></td>
            <td><?php echo $panel['nombre']; ?></td>
            <td><?php echo $panel['ubicacion']; ?></td>
            <td><?php echo $panel['stock_videos']; ?></td>
            <td>
                <button class="btn btn-warning" id="btn-edit" onclick="editPanel(<?php echo $panel['id_panel']; ?>)"><i class="fas fa-edit"></i></button>
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